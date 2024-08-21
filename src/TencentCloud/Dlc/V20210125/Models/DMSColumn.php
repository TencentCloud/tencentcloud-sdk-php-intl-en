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
 * Migrating column objects
 *
 * @method string getName() Obtain Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Description
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPosition() Obtain Sort
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPosition(integer $Position) Set Sort
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getParams() Obtain Additional Parameters
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParams(array $Params) Set Additional Parameters
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getBizParams() Obtain Business parameters
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBizParams(array $BizParams) Set Business parameters
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsPartition() Obtain Whether partitioned
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsPartition(boolean $IsPartition) Set Whether partitioned
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DMSColumn extends AbstractModel
{
    /**
     * @var string Name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Description
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var integer Sort
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Position;

    /**
     * @var array Additional Parameters
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Params;

    /**
     * @var array Business parameters
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BizParams;

    /**
     * @var boolean Whether partitioned
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsPartition;

    /**
     * @param string $Name Name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Description
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Position Sort
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Params Additional Parameters
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $BizParams Business parameters
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsPartition Whether partitioned
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }

        if (array_key_exists("BizParams",$param) and $param["BizParams"] !== null) {
            $this->BizParams = [];
            foreach ($param["BizParams"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->BizParams, $obj);
            }
        }

        if (array_key_exists("IsPartition",$param) and $param["IsPartition"] !== null) {
            $this->IsPartition = $param["IsPartition"];
        }
    }
}
