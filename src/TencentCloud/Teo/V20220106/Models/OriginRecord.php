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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Origin group record
 *
 * @method string getRecord() Obtain Record value
 * @method void setRecord(string $Record) Set Record value
 * @method array getArea() Obtain Region of the origin group. It’s available when the origin group `Type` is `area`. 
If it’s left empty, it means to use the default region.
 * @method void setArea(array $Area) Set Region of the origin group. It’s available when the origin group `Type` is `area`. 
If it’s left empty, it means to use the default region.
 * @method integer getWeight() Obtain The weight of the origin group. It’s available when the `Type` is `weight`.
 * @method void setWeight(integer $Weight) Set The weight of the origin group. It’s available when the `Type` is `weight`.
 * @method integer getPort() Obtain Port
 * @method void setPort(integer $Port) Set Port
 * @method string getRecordId() Obtain Record ID
 * @method void setRecordId(string $RecordId) Set Record ID
 * @method boolean getPrivate() Obtain Specifies whether to run private origin authentication.
It is valid only when `OriginType=third_part`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPrivate(boolean $Private) Set Specifies whether to run private origin authentication.
It is valid only when `OriginType=third_part`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getPrivateParameter() Obtain Private origin parameter.
It is valid only when `Private=true`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setPrivateParameter(array $PrivateParameter) Set Private origin parameter.
It is valid only when `Private=true`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class OriginRecord extends AbstractModel
{
    /**
     * @var string Record value
     */
    public $Record;

    /**
     * @var array Region of the origin group. It’s available when the origin group `Type` is `area`. 
If it’s left empty, it means to use the default region.
     */
    public $Area;

    /**
     * @var integer The weight of the origin group. It’s available when the `Type` is `weight`.
     */
    public $Weight;

    /**
     * @var integer Port
     */
    public $Port;

    /**
     * @var string Record ID
     */
    public $RecordId;

    /**
     * @var boolean Specifies whether to run private origin authentication.
It is valid only when `OriginType=third_part`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Private;

    /**
     * @var array Private origin parameter.
It is valid only when `Private=true`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $PrivateParameter;

    /**
     * @param string $Record Record value
     * @param array $Area Region of the origin group. It’s available when the origin group `Type` is `area`. 
If it’s left empty, it means to use the default region.
     * @param integer $Weight The weight of the origin group. It’s available when the `Type` is `weight`.
     * @param integer $Port Port
     * @param string $RecordId Record ID
     * @param boolean $Private Specifies whether to run private origin authentication.
It is valid only when `OriginType=third_part`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $PrivateParameter Private origin parameter.
It is valid only when `Private=true`.
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Record",$param) and $param["Record"] !== null) {
            $this->Record = $param["Record"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Private",$param) and $param["Private"] !== null) {
            $this->Private = $param["Private"];
        }

        if (array_key_exists("PrivateParameter",$param) and $param["PrivateParameter"] !== null) {
            $this->PrivateParameter = [];
            foreach ($param["PrivateParameter"] as $key => $value){
                $obj = new OriginRecordPrivateParameter();
                $obj->deserialize($value);
                array_push($this->PrivateParameter, $obj);
            }
        }
    }
}
