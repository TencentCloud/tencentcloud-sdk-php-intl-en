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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ConfigHistory1
 *
 * @method integer getId() Obtain id
 * @method void setId(integer $Id) Set id
 * @method string getInstanceId() Obtain Instance name.
 * @method void setInstanceId(string $InstanceId) Set Instance name.
 * @method string getCreatedAt() Obtain Creation time.


 * @method void setCreatedAt(string $CreatedAt) Set Creation time.


 * @method string getUpdatedAt() Obtain Update time.
 * @method void setUpdatedAt(string $UpdatedAt) Set Update time.
 * @method string getNodeType() Obtain dn/cn
 * @method void setNodeType(string $NodeType) Set dn/cn
 * @method string getParamName() Obtain Parameter name.
 * @method void setParamName(string $ParamName) Set Parameter name.
 * @method string getParamNewValue() Obtain New parameter value.
 * @method void setParamNewValue(string $ParamNewValue) Set New parameter value.
 * @method string getParamOldValue() Obtain Old parameter value.
 * @method void setParamOldValue(string $ParamOldValue) Set Old parameter value.
 * @method string getStatus() Obtain Status. Valid values: doing and success.
 * @method void setStatus(string $Status) Set Status. Valid values: doing and success.
 */
class ConfigHistory extends AbstractModel
{
    /**
     * @var integer id
     */
    public $Id;

    /**
     * @var string Instance name.
     */
    public $InstanceId;

    /**
     * @var string Creation time.


     */
    public $CreatedAt;

    /**
     * @var string Update time.
     */
    public $UpdatedAt;

    /**
     * @var string dn/cn
     */
    public $NodeType;

    /**
     * @var string Parameter name.
     */
    public $ParamName;

    /**
     * @var string New parameter value.
     */
    public $ParamNewValue;

    /**
     * @var string Old parameter value.
     */
    public $ParamOldValue;

    /**
     * @var string Status. Valid values: doing and success.
     */
    public $Status;

    /**
     * @param integer $Id id
     * @param string $InstanceId Instance name.
     * @param string $CreatedAt Creation time.


     * @param string $UpdatedAt Update time.
     * @param string $NodeType dn/cn
     * @param string $ParamName Parameter name.
     * @param string $ParamNewValue New parameter value.
     * @param string $ParamOldValue Old parameter value.
     * @param string $Status Status. Valid values: doing and success.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("ParamNewValue",$param) and $param["ParamNewValue"] !== null) {
            $this->ParamNewValue = $param["ParamNewValue"];
        }

        if (array_key_exists("ParamOldValue",$param) and $param["ParamOldValue"] !== null) {
            $this->ParamOldValue = $param["ParamOldValue"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
