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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVariableList request structure.
 *
 * @method string getAppId() Obtain Application ID
 * @method void setAppId(string $AppId) Set Application ID
 * @method array getFilterList() Obtain Filter criteria (supported: VariableIdList - variable ID list, VariableType - variable type)
 * @method void setFilterList(array $FilterList) Set Filter criteria (supported: VariableIdList - variable ID list, VariableType - variable type)
 * @method integer getModuleType() Obtain Module type. Enumeration values: 1: environment parameter, 2: application parameter, 3: system parameter, -1: ALL parameters.
 * @method void setModuleType(integer $ModuleType) Set Module type. Enumeration values: 1: environment parameter, 2: application parameter, 3: system parameter, -1: ALL parameters.
 * @method boolean getNeedInternalVariable() Obtain Whether internal variables are required
 * @method void setNeedInternalVariable(boolean $NeedInternalVariable) Set Whether internal variables are required
 * @method integer getPageNumber() Obtain Page number, starting from 0.
 * @method void setPageNumber(integer $PageNumber) Set Page number, starting from 0.
 * @method integer getPageSize() Obtain Number of items per page. Maximum: 100.
 * @method void setPageSize(integer $PageSize) Set Number of items per page. Maximum: 100.
 * @method string getQuery() Obtain Query keyword.
 * @method void setQuery(string $Query) Set Query keyword.
 */
class DescribeVariableListRequest extends AbstractModel
{
    /**
     * @var string Application ID
     */
    public $AppId;

    /**
     * @var array Filter criteria (supported: VariableIdList - variable ID list, VariableType - variable type)
     */
    public $FilterList;

    /**
     * @var integer Module type. Enumeration values: 1: environment parameter, 2: application parameter, 3: system parameter, -1: ALL parameters.
     */
    public $ModuleType;

    /**
     * @var boolean Whether internal variables are required
     */
    public $NeedInternalVariable;

    /**
     * @var integer Page number, starting from 0.
     */
    public $PageNumber;

    /**
     * @var integer Number of items per page. Maximum: 100.
     */
    public $PageSize;

    /**
     * @var string Query keyword.
     */
    public $Query;

    /**
     * @param string $AppId Application ID
     * @param array $FilterList Filter criteria (supported: VariableIdList - variable ID list, VariableType - variable type)
     * @param integer $ModuleType Module type. Enumeration values: 1: environment parameter, 2: application parameter, 3: system parameter, -1: ALL parameters.
     * @param boolean $NeedInternalVariable Whether internal variables are required
     * @param integer $PageNumber Page number, starting from 0.
     * @param integer $PageSize Number of items per page. Maximum: 100.
     * @param string $Query Query keyword.
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }

        if (array_key_exists("ModuleType",$param) and $param["ModuleType"] !== null) {
            $this->ModuleType = $param["ModuleType"];
        }

        if (array_key_exists("NeedInternalVariable",$param) and $param["NeedInternalVariable"] !== null) {
            $this->NeedInternalVariable = $param["NeedInternalVariable"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }
    }
}
