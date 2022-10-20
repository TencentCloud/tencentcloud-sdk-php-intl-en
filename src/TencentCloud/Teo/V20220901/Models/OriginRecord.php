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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Origin group record
 *
 * @method string getRecord() Obtain The origin record value, which can be an IPv4/IPv6 address or a domain name.
 * @method void setRecord(string $Record) Set The origin record value, which can be an IPv4/IPv6 address or a domain name.
 * @method string getRecordId() Obtain The origin record ID.
 * @method void setRecordId(string $RecordId) Set The origin record ID.
 * @method integer getPort() Obtain The origin port. Value rang: 1-65535.
 * @method void setPort(integer $Port) Set The origin port. Value rang: 1-65535.
 * @method integer getWeight() Obtain The weight when `ConfigurationType=weight`.
If 0 or no value is passed, the weight of each origin in a group will be 0 or left empty, indicating that origin-pull is performed by round-robin.
If a value between 1-100 is passed, the total weight of multiple origins in a group should be 100, indicating that origin-pull is performed by weight.
The weight when `ConfigurationType=proto`.
If 0 or no value is passed, the weight of each origin in a group will be 0 or left empty, indicating that origin-pull is performed by round-robin.
If a value between 1-100 is passed, the total weight of multiple origins with the same protocol in a group should be 100, indicating that origin-pull is performed by weight.
 * @method void setWeight(integer $Weight) Set The weight when `ConfigurationType=weight`.
If 0 or no value is passed, the weight of each origin in a group will be 0 or left empty, indicating that origin-pull is performed by round-robin.
If a value between 1-100 is passed, the total weight of multiple origins in a group should be 100, indicating that origin-pull is performed by weight.
The weight when `ConfigurationType=proto`.
If 0 or no value is passed, the weight of each origin in a group will be 0 or left empty, indicating that origin-pull is performed by round-robin.
If a value between 1-100 is passed, the total weight of multiple origins with the same protocol in a group should be 100, indicating that origin-pull is performed by weight.
 * @method string getProto() Obtain The origin protocol when `ConfigurationType=proto`, indicating that origin-pull is performed by protocol.
<li>`http`: HTTP protocol</li>
<li>`https`: HTTPS protocol</li>
 * @method void setProto(string $Proto) Set The origin protocol when `ConfigurationType=proto`, indicating that origin-pull is performed by protocol.
<li>`http`: HTTP protocol</li>
<li>`https`: HTTPS protocol</li>
 * @method array getArea() Obtain The region when `ConfigurationType=area`, which is specified by country code (ISO 3166 alpha-2) or continent code. If not specified, it indicates all regions. Supported continent codes:
<li>`Asia`</li>
<li>`Europe`</li>
<li>`Africa`</li>
<li>`Oceania`</li>
<li>`Americas`</li>An origin group must have at least one origin configured with all regions.
 * @method void setArea(array $Area) Set The region when `ConfigurationType=area`, which is specified by country code (ISO 3166 alpha-2) or continent code. If not specified, it indicates all regions. Supported continent codes:
<li>`Asia`</li>
<li>`Europe`</li>
<li>`Africa`</li>
<li>`Oceania`</li>
<li>`Americas`</li>An origin group must have at least one origin configured with all regions.
 * @method boolean getPrivate() Obtain It is valid only when `OriginType=third_part`.
Whether the origin group is private. Values:
<li>`true`: Yes.</li>
<li>`false`: No.</li>If not specified, it defaults to false.
 * @method void setPrivate(boolean $Private) Set It is valid only when `OriginType=third_part`.
Whether the origin group is private. Values:
<li>`true`: Yes.</li>
<li>`false`: No.</li>If not specified, it defaults to false.
 * @method array getPrivateParameters() Obtain The authentication parameter, which is used when `Private=true`.
 * @method void setPrivateParameters(array $PrivateParameters) Set The authentication parameter, which is used when `Private=true`.
 */
class OriginRecord extends AbstractModel
{
    /**
     * @var string The origin record value, which can be an IPv4/IPv6 address or a domain name.
     */
    public $Record;

    /**
     * @var string The origin record ID.
     */
    public $RecordId;

    /**
     * @var integer The origin port. Value rang: 1-65535.
     */
    public $Port;

    /**
     * @var integer The weight when `ConfigurationType=weight`.
If 0 or no value is passed, the weight of each origin in a group will be 0 or left empty, indicating that origin-pull is performed by round-robin.
If a value between 1-100 is passed, the total weight of multiple origins in a group should be 100, indicating that origin-pull is performed by weight.
The weight when `ConfigurationType=proto`.
If 0 or no value is passed, the weight of each origin in a group will be 0 or left empty, indicating that origin-pull is performed by round-robin.
If a value between 1-100 is passed, the total weight of multiple origins with the same protocol in a group should be 100, indicating that origin-pull is performed by weight.
     */
    public $Weight;

    /**
     * @var string The origin protocol when `ConfigurationType=proto`, indicating that origin-pull is performed by protocol.
<li>`http`: HTTP protocol</li>
<li>`https`: HTTPS protocol</li>
     */
    public $Proto;

    /**
     * @var array The region when `ConfigurationType=area`, which is specified by country code (ISO 3166 alpha-2) or continent code. If not specified, it indicates all regions. Supported continent codes:
<li>`Asia`</li>
<li>`Europe`</li>
<li>`Africa`</li>
<li>`Oceania`</li>
<li>`Americas`</li>An origin group must have at least one origin configured with all regions.
     */
    public $Area;

    /**
     * @var boolean It is valid only when `OriginType=third_part`.
Whether the origin group is private. Values:
<li>`true`: Yes.</li>
<li>`false`: No.</li>If not specified, it defaults to false.
     */
    public $Private;

    /**
     * @var array The authentication parameter, which is used when `Private=true`.
     */
    public $PrivateParameters;

    /**
     * @param string $Record The origin record value, which can be an IPv4/IPv6 address or a domain name.
     * @param string $RecordId The origin record ID.
     * @param integer $Port The origin port. Value rang: 1-65535.
     * @param integer $Weight The weight when `ConfigurationType=weight`.
If 0 or no value is passed, the weight of each origin in a group will be 0 or left empty, indicating that origin-pull is performed by round-robin.
If a value between 1-100 is passed, the total weight of multiple origins in a group should be 100, indicating that origin-pull is performed by weight.
The weight when `ConfigurationType=proto`.
If 0 or no value is passed, the weight of each origin in a group will be 0 or left empty, indicating that origin-pull is performed by round-robin.
If a value between 1-100 is passed, the total weight of multiple origins with the same protocol in a group should be 100, indicating that origin-pull is performed by weight.
     * @param string $Proto The origin protocol when `ConfigurationType=proto`, indicating that origin-pull is performed by protocol.
<li>`http`: HTTP protocol</li>
<li>`https`: HTTPS protocol</li>
     * @param array $Area The region when `ConfigurationType=area`, which is specified by country code (ISO 3166 alpha-2) or continent code. If not specified, it indicates all regions. Supported continent codes:
<li>`Asia`</li>
<li>`Europe`</li>
<li>`Africa`</li>
<li>`Oceania`</li>
<li>`Americas`</li>An origin group must have at least one origin configured with all regions.
     * @param boolean $Private It is valid only when `OriginType=third_part`.
Whether the origin group is private. Values:
<li>`true`: Yes.</li>
<li>`false`: No.</li>If not specified, it defaults to false.
     * @param array $PrivateParameters The authentication parameter, which is used when `Private=true`.
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

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Proto",$param) and $param["Proto"] !== null) {
            $this->Proto = $param["Proto"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Private",$param) and $param["Private"] !== null) {
            $this->Private = $param["Private"];
        }

        if (array_key_exists("PrivateParameters",$param) and $param["PrivateParameters"] !== null) {
            $this->PrivateParameters = [];
            foreach ($param["PrivateParameters"] as $key => $value){
                $obj = new PrivateParameter();
                $obj->deserialize($value);
                array_push($this->PrivateParameters, $obj);
            }
        }
    }
}
