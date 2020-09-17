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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InitDBInstances request structure.
 *
 * @method array getInstanceIds() Obtain Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page. You can use the [instance list querying API](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) to query the ID, whose value is the `InstanceId` value in output parameters.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page. You can use the [instance list querying API](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) to query the ID, whose value is the `InstanceId` value in output parameters.
 * @method string getNewPassword() Obtain New password of the instance. Rule: It can only contain 8-64 characters and must contain at least two of the following types of characters: letters, digits, and special characters (!@#$%^*()).
 * @method void setNewPassword(string $NewPassword) Set New password of the instance. Rule: It can only contain 8-64 characters and must contain at least two of the following types of characters: letters, digits, and special characters (!@#$%^*()).
 * @method array getParameters() Obtain List of instance parameters. Currently, "character_set_server" and "lower_case_table_names" are supported, whose value ranges are ["utf8","latin1","gbk","utf8mb4"] and ["0","1"], respectively.
 * @method void setParameters(array $Parameters) Set List of instance parameters. Currently, "character_set_server" and "lower_case_table_names" are supported, whose value ranges are ["utf8","latin1","gbk","utf8mb4"] and ["0","1"], respectively.
 * @method integer getVport() Obtain Instance port. Value range: [1024, 65535].
 * @method void setVport(integer $Vport) Set Instance port. Value range: [1024, 65535].
 */
class InitDBInstancesRequest extends AbstractModel
{
    /**
     * @var array Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page. You can use the [instance list querying API](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) to query the ID, whose value is the `InstanceId` value in output parameters.
     */
    public $InstanceIds;

    /**
     * @var string New password of the instance. Rule: It can only contain 8-64 characters and must contain at least two of the following types of characters: letters, digits, and special characters (!@#$%^*()).
     */
    public $NewPassword;

    /**
     * @var array List of instance parameters. Currently, "character_set_server" and "lower_case_table_names" are supported, whose value ranges are ["utf8","latin1","gbk","utf8mb4"] and ["0","1"], respectively.
     */
    public $Parameters;

    /**
     * @var integer Instance port. Value range: [1024, 65535].
     */
    public $Vport;

    /**
     * @param array $InstanceIds Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page. You can use the [instance list querying API](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) to query the ID, whose value is the `InstanceId` value in output parameters.
     * @param string $NewPassword New password of the instance. Rule: It can only contain 8-64 characters and must contain at least two of the following types of characters: letters, digits, and special characters (!@#$%^*()).
     * @param array $Parameters List of instance parameters. Currently, "character_set_server" and "lower_case_table_names" are supported, whose value ranges are ["utf8","latin1","gbk","utf8mb4"] and ["0","1"], respectively.
     * @param integer $Vport Instance port. Value range: [1024, 65535].
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("NewPassword",$param) and $param["NewPassword"] !== null) {
            $this->NewPassword = $param["NewPassword"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = [];
            foreach ($param["Parameters"] as $key => $value){
                $obj = new ParamInfo();
                $obj->deserialize($value);
                array_push($this->Parameters, $obj);
            }
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }
    }
}
