<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Layer-4 rule
 *
 * @method string getProtocol() Obtain Forwarding protocol. Valid values: [TCP, UDP]
 * @method void setProtocol(string $Protocol) Set Forwarding protocol. Valid values: [TCP, UDP]
 * @method integer getVirtualPort() Obtain Forwarding port
 * @method void setVirtualPort(integer $VirtualPort) Set Forwarding port
 * @method integer getSourcePort() Obtain Real server port
 * @method void setSourcePort(integer $SourcePort) Set Real server port
 * @method integer getSourceType() Obtain Forwarding method. Valid values: [1 (forwarding via domain name), 2 (forwarding via IP)]
 * @method void setSourceType(integer $SourceType) Set Forwarding method. Valid values: [1 (forwarding via domain name), 2 (forwarding via IP)]
 * @method integer getKeepTime() Obtain Session persistence duration in seconds
 * @method void setKeepTime(integer $KeepTime) Set Session persistence duration in seconds
 * @method array getSourceList() Obtain Forward list
 * @method void setSourceList(array $SourceList) Set Forward list
 * @method integer getLbType() Obtain Load balancing method. Valid values: [1 (weighted round robin), 2 (source IP hash)]
 * @method void setLbType(integer $LbType) Set Load balancing method. Valid values: [1 (weighted round robin), 2 (source IP hash)]
 * @method integer getKeepEnable() Obtain Session persistence status. Valid values: [0 (disabled), 1 (enabled)];
 * @method void setKeepEnable(integer $KeepEnable) Set Session persistence status. Valid values: [0 (disabled), 1 (enabled)];
 * @method string getRuleId() Obtain Rule ID
 * @method void setRuleId(string $RuleId) Set Rule ID
 * @method string getRuleName() Obtain Rule description
 * @method void setRuleName(string $RuleName) Set Rule description
 * @method integer getRemoveSwitch() Obtain Watermark removal status. Valid values: [0 (disabled), 1 (enabled)]
 * @method void setRemoveSwitch(integer $RemoveSwitch) Set Watermark removal status. Valid values: [0 (disabled), 1 (enabled)]
 */
class L4RuleEntry extends AbstractModel
{
    /**
     * @var string Forwarding protocol. Valid values: [TCP, UDP]
     */
    public $Protocol;

    /**
     * @var integer Forwarding port
     */
    public $VirtualPort;

    /**
     * @var integer Real server port
     */
    public $SourcePort;

    /**
     * @var integer Forwarding method. Valid values: [1 (forwarding via domain name), 2 (forwarding via IP)]
     */
    public $SourceType;

    /**
     * @var integer Session persistence duration in seconds
     */
    public $KeepTime;

    /**
     * @var array Forward list
     */
    public $SourceList;

    /**
     * @var integer Load balancing method. Valid values: [1 (weighted round robin), 2 (source IP hash)]
     */
    public $LbType;

    /**
     * @var integer Session persistence status. Valid values: [0 (disabled), 1 (enabled)];
     */
    public $KeepEnable;

    /**
     * @var string Rule ID
     */
    public $RuleId;

    /**
     * @var string Rule description
     */
    public $RuleName;

    /**
     * @var integer Watermark removal status. Valid values: [0 (disabled), 1 (enabled)]
     */
    public $RemoveSwitch;

    /**
     * @param string $Protocol Forwarding protocol. Valid values: [TCP, UDP]
     * @param integer $VirtualPort Forwarding port
     * @param integer $SourcePort Real server port
     * @param integer $SourceType Forwarding method. Valid values: [1 (forwarding via domain name), 2 (forwarding via IP)]
     * @param integer $KeepTime Session persistence duration in seconds
     * @param array $SourceList Forward list
     * @param integer $LbType Load balancing method. Valid values: [1 (weighted round robin), 2 (source IP hash)]
     * @param integer $KeepEnable Session persistence status. Valid values: [0 (disabled), 1 (enabled)];
     * @param string $RuleId Rule ID
     * @param string $RuleName Rule description
     * @param integer $RemoveSwitch Watermark removal status. Valid values: [0 (disabled), 1 (enabled)]
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("VirtualPort",$param) and $param["VirtualPort"] !== null) {
            $this->VirtualPort = $param["VirtualPort"];
        }

        if (array_key_exists("SourcePort",$param) and $param["SourcePort"] !== null) {
            $this->SourcePort = $param["SourcePort"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("KeepTime",$param) and $param["KeepTime"] !== null) {
            $this->KeepTime = $param["KeepTime"];
        }

        if (array_key_exists("SourceList",$param) and $param["SourceList"] !== null) {
            $this->SourceList = [];
            foreach ($param["SourceList"] as $key => $value){
                $obj = new L4RuleSource();
                $obj->deserialize($value);
                array_push($this->SourceList, $obj);
            }
        }

        if (array_key_exists("LbType",$param) and $param["LbType"] !== null) {
            $this->LbType = $param["LbType"];
        }

        if (array_key_exists("KeepEnable",$param) and $param["KeepEnable"] !== null) {
            $this->KeepEnable = $param["KeepEnable"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RemoveSwitch",$param) and $param["RemoveSwitch"] !== null) {
            $this->RemoveSwitch = $param["RemoveSwitch"];
        }
    }
}
