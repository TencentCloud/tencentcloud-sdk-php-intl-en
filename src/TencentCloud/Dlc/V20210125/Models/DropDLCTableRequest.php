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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DropDLCTable request structure.
 *
 * @method string getDataEngineName() Obtain Engine name
 * @method void setDataEngineName(string $DataEngineName) Set Engine name
 * @method string getDbName() Obtain Database name
 * @method void setDbName(string $DbName) Set Database name
 * @method string getName() Obtain Data table name
 * @method void setName(string $Name) Set Data table name
 * @method boolean getDeleteData() Obtain Whether to delete the data
 * @method void setDeleteData(boolean $DeleteData) Set Whether to delete the data
 * @method string getResourceGroupName() Obtain Resource group name
 * @method void setResourceGroupName(string $ResourceGroupName) Set Resource group name
 */
class DropDLCTableRequest extends AbstractModel
{
    /**
     * @var string Engine name
     */
    public $DataEngineName;

    /**
     * @var string Database name
     */
    public $DbName;

    /**
     * @var string Data table name
     */
    public $Name;

    /**
     * @var boolean Whether to delete the data
     */
    public $DeleteData;

    /**
     * @var string Resource group name
     */
    public $ResourceGroupName;

    /**
     * @param string $DataEngineName Engine name
     * @param string $DbName Database name
     * @param string $Name Data table name
     * @param boolean $DeleteData Whether to delete the data
     * @param string $ResourceGroupName Resource group name
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
        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DeleteData",$param) and $param["DeleteData"] !== null) {
            $this->DeleteData = $param["DeleteData"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }
    }
}
