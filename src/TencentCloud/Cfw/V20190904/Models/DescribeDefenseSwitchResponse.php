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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDefenseSwitch response structure.
 *
 * @method integer getBasicRuleSwitch() Obtain Whether to enable the Basic Protection feature
 * @method void setBasicRuleSwitch(integer $BasicRuleSwitch) Set Whether to enable the Basic Protection feature
 * @method integer getBaselineAllSwitch() Obtain Whether to enable the Security Baseline feature
 * @method void setBaselineAllSwitch(integer $BaselineAllSwitch) Set Whether to enable the Security Baseline feature
 * @method integer getTiSwitch() Obtain Whether to enable the Treat Intelligence feature
 * @method void setTiSwitch(integer $TiSwitch) Set Whether to enable the Treat Intelligence feature
 * @method integer getVirtualPatchSwitch() Obtain Whether to enable the Virtual Patch feature
 * @method void setVirtualPatchSwitch(integer $VirtualPatchSwitch) Set Whether to enable the Virtual Patch feature
 * @method integer getHistoryOpen() Obtain Whether it has been enabled before
 * @method void setHistoryOpen(integer $HistoryOpen) Set Whether it has been enabled before
 * @method integer getReturnCode() Obtain Status code. `0`: Succeeded. Others: Failed
 * @method void setReturnCode(integer $ReturnCode) Set Status code. `0`: Succeeded. Others: Failed
 * @method string getReturnMsg() Obtain Status message. `success` and `fail.
 * @method void setReturnMsg(string $ReturnMsg) Set Status message. `success` and `fail.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDefenseSwitchResponse extends AbstractModel
{
    /**
     * @var integer Whether to enable the Basic Protection feature
     */
    public $BasicRuleSwitch;

    /**
     * @var integer Whether to enable the Security Baseline feature
     */
    public $BaselineAllSwitch;

    /**
     * @var integer Whether to enable the Treat Intelligence feature
     */
    public $TiSwitch;

    /**
     * @var integer Whether to enable the Virtual Patch feature
     */
    public $VirtualPatchSwitch;

    /**
     * @var integer Whether it has been enabled before
     */
    public $HistoryOpen;

    /**
     * @var integer Status code. `0`: Succeeded. Others: Failed
     */
    public $ReturnCode;

    /**
     * @var string Status message. `success` and `fail.
     */
    public $ReturnMsg;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $BasicRuleSwitch Whether to enable the Basic Protection feature
     * @param integer $BaselineAllSwitch Whether to enable the Security Baseline feature
     * @param integer $TiSwitch Whether to enable the Treat Intelligence feature
     * @param integer $VirtualPatchSwitch Whether to enable the Virtual Patch feature
     * @param integer $HistoryOpen Whether it has been enabled before
     * @param integer $ReturnCode Status code. `0`: Succeeded. Others: Failed
     * @param string $ReturnMsg Status message. `success` and `fail.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("BasicRuleSwitch",$param) and $param["BasicRuleSwitch"] !== null) {
            $this->BasicRuleSwitch = $param["BasicRuleSwitch"];
        }

        if (array_key_exists("BaselineAllSwitch",$param) and $param["BaselineAllSwitch"] !== null) {
            $this->BaselineAllSwitch = $param["BaselineAllSwitch"];
        }

        if (array_key_exists("TiSwitch",$param) and $param["TiSwitch"] !== null) {
            $this->TiSwitch = $param["TiSwitch"];
        }

        if (array_key_exists("VirtualPatchSwitch",$param) and $param["VirtualPatchSwitch"] !== null) {
            $this->VirtualPatchSwitch = $param["VirtualPatchSwitch"];
        }

        if (array_key_exists("HistoryOpen",$param) and $param["HistoryOpen"] !== null) {
            $this->HistoryOpen = $param["HistoryOpen"];
        }

        if (array_key_exists("ReturnCode",$param) and $param["ReturnCode"] !== null) {
            $this->ReturnCode = $param["ReturnCode"];
        }

        if (array_key_exists("ReturnMsg",$param) and $param["ReturnMsg"] !== null) {
            $this->ReturnMsg = $param["ReturnMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
