<?php
/**
 * This file is part of the BEAR.Saturday package.
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */

/**
 * Ipadエージェントアダプター
 */
class BEAR_Agent_Adapter_Ipad extends BEAR_Agent_Adapter implements BEAR_Agent_Adapter_Interface
{
    /**
     * Constructor
     */
    public function __construct(array $config)
    {
        parent::__construct($config);
        $this->_config['agent_filter'] = true;
        $contentType = isset($this->_config['content_type']) ? $this->_config['content_type'] : 'text/html';
        $this->_config['header'] = 'Content-Type: ' . $contentType . '; charset=utf-8';
        $this->_config['charset'] = 'utf-8';
        $this->_config['enable_js'] = true;
        $this->_config['role'] = [BEAR_Agent::UA_IPAD, BEAR_Agent::UA_DEFAULT];
    }
}
