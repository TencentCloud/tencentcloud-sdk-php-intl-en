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
 * @method string getType() Obtain The origin type. Values:
<li>`IP_DOMAIN`: IPv4/IPv6 address or domain name</li>
<li>`COS`: COS bucket address</li>
<li>`AWS_S3`: AWS S3 bucket address
 * @method void setType(string $Type) Set The origin type. Values:
<li>`IP_DOMAIN`: IPv4/IPv6 address or domain name</li>
<li>`COS`: COS bucket address</li>
<li>`AWS_S3`: AWS S3 bucket address
 * @method string getRecordId() Obtain The origin record ID.
 * @method void setRecordId(string $RecordId) Set The origin record ID.
 * @method integer getWeight() Obtain Weight of an origin. Range: 0-100. If it is not specified, a random weight is assigned. If `0` is passed in, there is no traffic scheduled to this origin.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setWeight(integer $Weight) Set Weight of an origin. Range: 0-100. If it is not specified, a random weight is assigned. If `0` is passed in, there is no traffic scheduled to this origin.
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method boolean getPrivate() Obtain Whether to enable private authentication. It is valid when `OriginType=COS/AWS_S3`. Values:
<li>`true`: Yes.</li>
<li>`false`: No.</li>Default: `false`.

 * @method void setPrivate(boolean $Private) Set Whether to enable private authentication. It is valid when `OriginType=COS/AWS_S3`. Values:
<li>`true`: Yes.</li>
<li>`false`: No.</li>Default: `false`.

 * @method array getPrivateParameters() Obtain Private authentication parameters. This field is valid when `Private=true`.
 * @method void setPrivateParameters(array $PrivateParameters) Set Private authentication parameters. This field is valid when `Private=true`.
 */
class OriginRecord extends AbstractModel
{
    /**
     * @var string The origin record value, which can be an IPv4/IPv6 address or a domain name.
     */
    public $Record;

    /**
     * @var string The origin type. Values:
<li>`IP_DOMAIN`: IPv4/IPv6 address or domain name</li>
<li>`COS`: COS bucket address</li>
<li>`AWS_S3`: AWS S3 bucket address
     */
    public $Type;

    /**
     * @var string The origin record ID.
     */
    public $RecordId;

    /**
     * @var integer Weight of an origin. Range: 0-100. If it is not specified, a random weight is assigned. If `0` is passed in, there is no traffic scheduled to this origin.
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $Weight;

    /**
     * @var boolean Whether to enable private authentication. It is valid when `OriginType=COS/AWS_S3`. Values:
<li>`true`: Yes.</li>
<li>`false`: No.</li>Default: `false`.

     */
    public $Private;

    /**
     * @var array Private authentication parameters. This field is valid when `Private=true`.
     */
    public $PrivateParameters;

    /**
     * @param string $Record The origin record value, which can be an IPv4/IPv6 address or a domain name.
     * @param string $Type The origin type. Values:
<li>`IP_DOMAIN`: IPv4/IPv6 address or domain name</li>
<li>`COS`: COS bucket address</li>
<li>`AWS_S3`: AWS S3 bucket address
     * @param string $RecordId The origin record ID.
     * @param integer $Weight Weight of an origin. Range: 0-100. If it is not specified, a random weight is assigned. If `0` is passed in, there is no traffic scheduled to this origin.
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param boolean $Private Whether to enable private authentication. It is valid when `OriginType=COS/AWS_S3`. Values:
<li>`true`: Yes.</li>
<li>`false`: No.</li>Default: `false`.

     * @param array $PrivateParameters Private authentication parameters. This field is valid when `Private=true`.
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
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
