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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterConfigs request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID, for example, cdwch-xxxx
 * @method void setInstanceId(string $InstanceId) Set Cluster ID, for example, cdwch-xxxx
 * @method array getModifyConfContext() Obtain Configuration file modification information
 * @method void setModifyConfContext(array $ModifyConfContext) Set Configuration file modification information
 * @method string getRemark() Obtain Reason for modification
 * @method void setRemark(string $Remark) Set Reason for modification
 */
class ModifyClusterConfigsRequest extends AbstractModel
{
    /**
     * @var string Cluster ID, for example, cdwch-xxxx
     */
    public $InstanceId;

    /**
     * @var array Configuration file modification information
     */
    public $ModifyConfContext;

    /**
     * @var string Reason for modification
     */
    public $Remark;

    /**
     * @param string $InstanceId Cluster ID, for example, cdwch-xxxx
     * @param array $ModifyConfContext Configuration file modification information
     * @param string $Remark Reason for modification
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ModifyConfContext",$param) and $param["ModifyConfContext"] !== null) {
            $this->ModifyConfContext = [];
            foreach ($param["ModifyConfContext"] as $key => $value){
                $obj = new ConfigSubmitContext();
                $obj->deserialize($value);
                array_push($this->ModifyConfContext, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
