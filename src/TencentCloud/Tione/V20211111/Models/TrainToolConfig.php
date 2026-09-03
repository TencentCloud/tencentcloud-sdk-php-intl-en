<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method boolean getEnableHangMonitor() Obtain 
 * @method void setEnableHangMonitor(boolean $EnableHangMonitor) Set 
 * @method array getHangMonitorNodes() Obtain 
 * @method void setHangMonitorNodes(array $HangMonitorNodes) Set 
 * @method integer getLogHangTimeoutInMinute() Obtain 
 * @method void setLogHangTimeoutInMinute(integer $LogHangTimeoutInMinute) Set 
 */
class TrainToolConfig extends AbstractModel
{
    /**
     * @var boolean 
     */
    public $EnableHangMonitor;

    /**
     * @var array 
     */
    public $HangMonitorNodes;

    /**
     * @var integer 
     */
    public $LogHangTimeoutInMinute;

    /**
     * @param boolean $EnableHangMonitor 
     * @param array $HangMonitorNodes 
     * @param integer $LogHangTimeoutInMinute 
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("EnableHangMonitor",$param) and $param["EnableHangMonitor"] !== null) {
            $this->EnableHangMonitor = $param["EnableHangMonitor"];
        }

        if (array_key_exists("HangMonitorNodes",$param) and $param["HangMonitorNodes"] !== null) {
            $this->HangMonitorNodes = $param["HangMonitorNodes"];
        }

        if (array_key_exists("LogHangTimeoutInMinute",$param) and $param["LogHangTimeoutInMinute"] !== null) {
            $this->LogHangTimeoutInMinute = $param["LogHangTimeoutInMinute"];
        }
    }
}
