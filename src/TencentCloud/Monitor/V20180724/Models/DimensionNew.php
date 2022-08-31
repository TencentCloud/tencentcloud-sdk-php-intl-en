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
 * Dimension information of the policy type
 *
 * @method string getKey() Obtain Dimension key ID displayed on the backend
 * @method void setKey(string $Key) Set Dimension key ID displayed on the backend
 * @method string getName() Obtain Dimension key name displayed on the frontend
 * @method void setName(string $Name) Set Dimension key name displayed on the frontend
 * @method boolean getIsRequired() Obtain Whether it is required
 * @method void setIsRequired(boolean $IsRequired) Set Whether it is required
 * @method array getOperators() Obtain List of supported operators
 * @method void setOperators(array $Operators) Set List of supported operators
 * @method boolean getIsMultiple() Obtain Whether multiple items can be selected
 * @method void setIsMultiple(boolean $IsMultiple) Set Whether multiple items can be selected
 * @method boolean getIsMutable() Obtain Whether it can be modified after creation
 * @method void setIsMutable(boolean $IsMutable) Set Whether it can be modified after creation
 * @method boolean getIsVisible() Obtain Whether it is displayed to users
 * @method void setIsVisible(boolean $IsVisible) Set Whether it is displayed to users
 * @method boolean getCanFilterPolicy() Obtain Whether it can be used to filter policies
 * @method void setCanFilterPolicy(boolean $CanFilterPolicy) Set Whether it can be used to filter policies
 * @method boolean getCanFilterHistory() Obtain Whether it can be used to filter historical alarms
 * @method void setCanFilterHistory(boolean $CanFilterHistory) Set Whether it can be used to filter historical alarms
 * @method boolean getCanGroupBy() Obtain Whether it can be used as an aggregate dimension
 * @method void setCanGroupBy(boolean $CanGroupBy) Set Whether it can be used as an aggregate dimension
 * @method boolean getMustGroupBy() Obtain Whether it must be used as an aggregate dimension
 * @method void setMustGroupBy(boolean $MustGroupBy) Set Whether it must be used as an aggregate dimension
 * @method string getShowValueReplace() Obtain The key to be replaced on the frontend
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShowValueReplace(string $ShowValueReplace) Set The key to be replaced on the frontend
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DimensionNew extends AbstractModel
{
    /**
     * @var string Dimension key ID displayed on the backend
     */
    public $Key;

    /**
     * @var string Dimension key name displayed on the frontend
     */
    public $Name;

    /**
     * @var boolean Whether it is required
     */
    public $IsRequired;

    /**
     * @var array List of supported operators
     */
    public $Operators;

    /**
     * @var boolean Whether multiple items can be selected
     */
    public $IsMultiple;

    /**
     * @var boolean Whether it can be modified after creation
     */
    public $IsMutable;

    /**
     * @var boolean Whether it is displayed to users
     */
    public $IsVisible;

    /**
     * @var boolean Whether it can be used to filter policies
     */
    public $CanFilterPolicy;

    /**
     * @var boolean Whether it can be used to filter historical alarms
     */
    public $CanFilterHistory;

    /**
     * @var boolean Whether it can be used as an aggregate dimension
     */
    public $CanGroupBy;

    /**
     * @var boolean Whether it must be used as an aggregate dimension
     */
    public $MustGroupBy;

    /**
     * @var string The key to be replaced on the frontend
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShowValueReplace;

    /**
     * @param string $Key Dimension key ID displayed on the backend
     * @param string $Name Dimension key name displayed on the frontend
     * @param boolean $IsRequired Whether it is required
     * @param array $Operators List of supported operators
     * @param boolean $IsMultiple Whether multiple items can be selected
     * @param boolean $IsMutable Whether it can be modified after creation
     * @param boolean $IsVisible Whether it is displayed to users
     * @param boolean $CanFilterPolicy Whether it can be used to filter policies
     * @param boolean $CanFilterHistory Whether it can be used to filter historical alarms
     * @param boolean $CanGroupBy Whether it can be used as an aggregate dimension
     * @param boolean $MustGroupBy Whether it must be used as an aggregate dimension
     * @param string $ShowValueReplace The key to be replaced on the frontend
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IsRequired",$param) and $param["IsRequired"] !== null) {
            $this->IsRequired = $param["IsRequired"];
        }

        if (array_key_exists("Operators",$param) and $param["Operators"] !== null) {
            $this->Operators = [];
            foreach ($param["Operators"] as $key => $value){
                $obj = new Operator();
                $obj->deserialize($value);
                array_push($this->Operators, $obj);
            }
        }

        if (array_key_exists("IsMultiple",$param) and $param["IsMultiple"] !== null) {
            $this->IsMultiple = $param["IsMultiple"];
        }

        if (array_key_exists("IsMutable",$param) and $param["IsMutable"] !== null) {
            $this->IsMutable = $param["IsMutable"];
        }

        if (array_key_exists("IsVisible",$param) and $param["IsVisible"] !== null) {
            $this->IsVisible = $param["IsVisible"];
        }

        if (array_key_exists("CanFilterPolicy",$param) and $param["CanFilterPolicy"] !== null) {
            $this->CanFilterPolicy = $param["CanFilterPolicy"];
        }

        if (array_key_exists("CanFilterHistory",$param) and $param["CanFilterHistory"] !== null) {
            $this->CanFilterHistory = $param["CanFilterHistory"];
        }

        if (array_key_exists("CanGroupBy",$param) and $param["CanGroupBy"] !== null) {
            $this->CanGroupBy = $param["CanGroupBy"];
        }

        if (array_key_exists("MustGroupBy",$param) and $param["MustGroupBy"] !== null) {
            $this->MustGroupBy = $param["MustGroupBy"];
        }

        if (array_key_exists("ShowValueReplace",$param) and $param["ShowValueReplace"] !== null) {
            $this->ShowValueReplace = $param["ShowValueReplace"];
        }
    }
}
