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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstancePasswordComplexity request structure.
 *
 * @method array getInstanceIds() Obtain Instance ID of the instance for which the password complexity needs to be modified. The [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API can be called to obtain it.
Description: Support multiple instance IDs for modification.
 * @method void setInstanceIds(array $InstanceIds) Set Instance ID of the instance for which the password complexity needs to be modified. The [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API can be called to obtain it.
Description: Support multiple instance IDs for modification.
 * @method array getParamList() Obtain Options to modify password complexity. Each option is written in metric combinations. A group includes Name and CurrentValue. Among them, Name refers to the parameter name of the corresponding option, and CurrentValue represents the parameter value. For example: [{"Name": "validate_password.length", "CurrentValue": "10"}] means changing the minimum number of characters in a password to 10.
Description: The options for modifying password complexity vary by database version of instances as follows.
1. MySQL 8.0:
The option validate_password.policy means the switch for password complexity. A value of LOW means disabling; a value of MEDIUM means enabling.
The option validate_password.length indicates the minimum number of characters for the total code length.
The option validate_password.mixed_case_count indicates the minimum number of lowercase and uppercase letters.
Option validate_password.number_count indicates the minimum number of digits.
The option validate_password.special_char_count indicates the minimum number of special characters.
2. MySQL 5.6,MySQL 5.7:
The option validate_password_policy means the password complexity switch. A value of LOW means disabling; a value of MEDIUM means enabling.
The option validate_password_length indicates the minimum number of characters for the total code length.
The option validate_password_mixed_case_count means the minimum number of uppercase and lowercase letters.
Option validate_password_number_count means the minimum number of digits.
Option validate_password_special_char_count indicates the minimum number of special characters.
 * @method void setParamList(array $ParamList) Set Options to modify password complexity. Each option is written in metric combinations. A group includes Name and CurrentValue. Among them, Name refers to the parameter name of the corresponding option, and CurrentValue represents the parameter value. For example: [{"Name": "validate_password.length", "CurrentValue": "10"}] means changing the minimum number of characters in a password to 10.
Description: The options for modifying password complexity vary by database version of instances as follows.
1. MySQL 8.0:
The option validate_password.policy means the switch for password complexity. A value of LOW means disabling; a value of MEDIUM means enabling.
The option validate_password.length indicates the minimum number of characters for the total code length.
The option validate_password.mixed_case_count indicates the minimum number of lowercase and uppercase letters.
Option validate_password.number_count indicates the minimum number of digits.
The option validate_password.special_char_count indicates the minimum number of special characters.
2. MySQL 5.6,MySQL 5.7:
The option validate_password_policy means the password complexity switch. A value of LOW means disabling; a value of MEDIUM means enabling.
The option validate_password_length indicates the minimum number of characters for the total code length.
The option validate_password_mixed_case_count means the minimum number of uppercase and lowercase letters.
Option validate_password_number_count means the minimum number of digits.
Option validate_password_special_char_count indicates the minimum number of special characters.
 */
class ModifyInstancePasswordComplexityRequest extends AbstractModel
{
    /**
     * @var array Instance ID of the instance for which the password complexity needs to be modified. The [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API can be called to obtain it.
Description: Support multiple instance IDs for modification.
     */
    public $InstanceIds;

    /**
     * @var array Options to modify password complexity. Each option is written in metric combinations. A group includes Name and CurrentValue. Among them, Name refers to the parameter name of the corresponding option, and CurrentValue represents the parameter value. For example: [{"Name": "validate_password.length", "CurrentValue": "10"}] means changing the minimum number of characters in a password to 10.
Description: The options for modifying password complexity vary by database version of instances as follows.
1. MySQL 8.0:
The option validate_password.policy means the switch for password complexity. A value of LOW means disabling; a value of MEDIUM means enabling.
The option validate_password.length indicates the minimum number of characters for the total code length.
The option validate_password.mixed_case_count indicates the minimum number of lowercase and uppercase letters.
Option validate_password.number_count indicates the minimum number of digits.
The option validate_password.special_char_count indicates the minimum number of special characters.
2. MySQL 5.6,MySQL 5.7:
The option validate_password_policy means the password complexity switch. A value of LOW means disabling; a value of MEDIUM means enabling.
The option validate_password_length indicates the minimum number of characters for the total code length.
The option validate_password_mixed_case_count means the minimum number of uppercase and lowercase letters.
Option validate_password_number_count means the minimum number of digits.
Option validate_password_special_char_count indicates the minimum number of special characters.
     */
    public $ParamList;

    /**
     * @param array $InstanceIds Instance ID of the instance for which the password complexity needs to be modified. The [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API can be called to obtain it.
Description: Support multiple instance IDs for modification.
     * @param array $ParamList Options to modify password complexity. Each option is written in metric combinations. A group includes Name and CurrentValue. Among them, Name refers to the parameter name of the corresponding option, and CurrentValue represents the parameter value. For example: [{"Name": "validate_password.length", "CurrentValue": "10"}] means changing the minimum number of characters in a password to 10.
Description: The options for modifying password complexity vary by database version of instances as follows.
1. MySQL 8.0:
The option validate_password.policy means the switch for password complexity. A value of LOW means disabling; a value of MEDIUM means enabling.
The option validate_password.length indicates the minimum number of characters for the total code length.
The option validate_password.mixed_case_count indicates the minimum number of lowercase and uppercase letters.
Option validate_password.number_count indicates the minimum number of digits.
The option validate_password.special_char_count indicates the minimum number of special characters.
2. MySQL 5.6,MySQL 5.7:
The option validate_password_policy means the password complexity switch. A value of LOW means disabling; a value of MEDIUM means enabling.
The option validate_password_length indicates the minimum number of characters for the total code length.
The option validate_password_mixed_case_count means the minimum number of uppercase and lowercase letters.
Option validate_password_number_count means the minimum number of digits.
Option validate_password_special_char_count indicates the minimum number of special characters.
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

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new Parameter();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }
    }
}
