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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance authorization information
 *
 * @method integer getHasChargeOperation() Obtain Whether there is permission to operate on the billing information. Valid values: 1 (yes), 2 (no).
 * @method void setHasChargeOperation(integer $HasChargeOperation) Set Whether there is permission to operate on the billing information. Valid values: 1 (yes), 2 (no).
 * @method integer getHasVpcDisplay() Obtain Whether there is permission to display the VPC information. Valid values: 1 (yes), 2 (no).
 * @method void setHasVpcDisplay(integer $HasVpcDisplay) Set Whether there is permission to display the VPC information. Valid values: 1 (yes), 2 (no).
 * @method integer getHasGrafanaStatusChange() Obtain Whether there is permission to change the Grafana status. Valid values: 1 (yes), 2 (no).
 * @method void setHasGrafanaStatusChange(integer $HasGrafanaStatusChange) Set Whether there is permission to change the Grafana status. Valid values: 1 (yes), 2 (no).
 * @method integer getHasAgentManage() Obtain Whether there is permission to manage agents. Valid values: 1 (yes), 2 (no).
 * @method void setHasAgentManage(integer $HasAgentManage) Set Whether there is permission to manage agents. Valid values: 1 (yes), 2 (no).
 * @method integer getHasTkeManage() Obtain Whether there is permission to manage TKE integrations. Valid values: 1 (yes), 2 (no).
 * @method void setHasTkeManage(integer $HasTkeManage) Set Whether there is permission to manage TKE integrations. Valid values: 1 (yes), 2 (no).
 * @method integer getHasApiOperation() Obtain Whether there is permission to display the API information. Valid values: 1 (yes), 2 (no).
 * @method void setHasApiOperation(integer $HasApiOperation) Set Whether there is permission to display the API information. Valid values: 1 (yes), 2 (no).
 */
class PrometheusInstanceGrantInfo extends AbstractModel
{
    /**
     * @var integer Whether there is permission to operate on the billing information. Valid values: 1 (yes), 2 (no).
     */
    public $HasChargeOperation;

    /**
     * @var integer Whether there is permission to display the VPC information. Valid values: 1 (yes), 2 (no).
     */
    public $HasVpcDisplay;

    /**
     * @var integer Whether there is permission to change the Grafana status. Valid values: 1 (yes), 2 (no).
     */
    public $HasGrafanaStatusChange;

    /**
     * @var integer Whether there is permission to manage agents. Valid values: 1 (yes), 2 (no).
     */
    public $HasAgentManage;

    /**
     * @var integer Whether there is permission to manage TKE integrations. Valid values: 1 (yes), 2 (no).
     */
    public $HasTkeManage;

    /**
     * @var integer Whether there is permission to display the API information. Valid values: 1 (yes), 2 (no).
     */
    public $HasApiOperation;

    /**
     * @param integer $HasChargeOperation Whether there is permission to operate on the billing information. Valid values: 1 (yes), 2 (no).
     * @param integer $HasVpcDisplay Whether there is permission to display the VPC information. Valid values: 1 (yes), 2 (no).
     * @param integer $HasGrafanaStatusChange Whether there is permission to change the Grafana status. Valid values: 1 (yes), 2 (no).
     * @param integer $HasAgentManage Whether there is permission to manage agents. Valid values: 1 (yes), 2 (no).
     * @param integer $HasTkeManage Whether there is permission to manage TKE integrations. Valid values: 1 (yes), 2 (no).
     * @param integer $HasApiOperation Whether there is permission to display the API information. Valid values: 1 (yes), 2 (no).
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
        if (array_key_exists("HasChargeOperation",$param) and $param["HasChargeOperation"] !== null) {
            $this->HasChargeOperation = $param["HasChargeOperation"];
        }

        if (array_key_exists("HasVpcDisplay",$param) and $param["HasVpcDisplay"] !== null) {
            $this->HasVpcDisplay = $param["HasVpcDisplay"];
        }

        if (array_key_exists("HasGrafanaStatusChange",$param) and $param["HasGrafanaStatusChange"] !== null) {
            $this->HasGrafanaStatusChange = $param["HasGrafanaStatusChange"];
        }

        if (array_key_exists("HasAgentManage",$param) and $param["HasAgentManage"] !== null) {
            $this->HasAgentManage = $param["HasAgentManage"];
        }

        if (array_key_exists("HasTkeManage",$param) and $param["HasTkeManage"] !== null) {
            $this->HasTkeManage = $param["HasTkeManage"];
        }

        if (array_key_exists("HasApiOperation",$param) and $param["HasApiOperation"] !== null) {
            $this->HasApiOperation = $param["HasApiOperation"];
        }
    }
}
