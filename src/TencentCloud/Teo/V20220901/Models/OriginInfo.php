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
 * Details of the origin.
 *
 * @method string getOriginType() Obtain The origin type. Values: 
<li>`IP_DOMAIN`: IPv4/IPv6 address or domain name</li>
<li>`COS`: COS bucket address</li>
<li>`ORIGIN_GROUP`: Origin group</li>
<li>`AWS_S3`: AWS S3 bucket address</li>
 * @method void setOriginType(string $OriginType) Set The origin type. Values: 
<li>`IP_DOMAIN`: IPv4/IPv6 address or domain name</li>
<li>`COS`: COS bucket address</li>
<li>`ORIGIN_GROUP`: Origin group</li>
<li>`AWS_S3`: AWS S3 bucket address</li>
 * @method string getOrigin() Obtain The origin address. Enter the origin group ID if `OriginType=ORIGIN_GROUP`.
 * @method void setOrigin(string $Origin) Set The origin address. Enter the origin group ID if `OriginType=ORIGIN_GROUP`.
 * @method string getBackupOrigin() Obtain ID of the secondary origin group (valid when `OriginType=ORIGIN_GROUP`). If it’s not specified, it indicates that secondary origins are not used.
 * @method void setBackupOrigin(string $BackupOrigin) Set ID of the secondary origin group (valid when `OriginType=ORIGIN_GROUP`). If it’s not specified, it indicates that secondary origins are not used.
 * @method string getPrivateAccess() Obtain Whether to authenticate access to the private object storage origin (valid when `OriginType=COS/AWS_S3`). Values: 
<li>`on`: Enable private authentication.</li>
<li>`off`: Disable private authentication.</li>If this field is not specified, the default value `off` is used.
 * @method void setPrivateAccess(string $PrivateAccess) Set Whether to authenticate access to the private object storage origin (valid when `OriginType=COS/AWS_S3`). Values: 
<li>`on`: Enable private authentication.</li>
<li>`off`: Disable private authentication.</li>If this field is not specified, the default value `off` is used.
 * @method array getPrivateParameters() Obtain The private authentication parameters. This field is valid when `PrivateAccess=on`.
 * @method void setPrivateParameters(array $PrivateParameters) Set The private authentication parameters. This field is valid when `PrivateAccess=on`.
 */
class OriginInfo extends AbstractModel
{
    /**
     * @var string The origin type. Values: 
<li>`IP_DOMAIN`: IPv4/IPv6 address or domain name</li>
<li>`COS`: COS bucket address</li>
<li>`ORIGIN_GROUP`: Origin group</li>
<li>`AWS_S3`: AWS S3 bucket address</li>
     */
    public $OriginType;

    /**
     * @var string The origin address. Enter the origin group ID if `OriginType=ORIGIN_GROUP`.
     */
    public $Origin;

    /**
     * @var string ID of the secondary origin group (valid when `OriginType=ORIGIN_GROUP`). If it’s not specified, it indicates that secondary origins are not used.
     */
    public $BackupOrigin;

    /**
     * @var string Whether to authenticate access to the private object storage origin (valid when `OriginType=COS/AWS_S3`). Values: 
<li>`on`: Enable private authentication.</li>
<li>`off`: Disable private authentication.</li>If this field is not specified, the default value `off` is used.
     */
    public $PrivateAccess;

    /**
     * @var array The private authentication parameters. This field is valid when `PrivateAccess=on`.
     */
    public $PrivateParameters;

    /**
     * @param string $OriginType The origin type. Values: 
<li>`IP_DOMAIN`: IPv4/IPv6 address or domain name</li>
<li>`COS`: COS bucket address</li>
<li>`ORIGIN_GROUP`: Origin group</li>
<li>`AWS_S3`: AWS S3 bucket address</li>
     * @param string $Origin The origin address. Enter the origin group ID if `OriginType=ORIGIN_GROUP`.
     * @param string $BackupOrigin ID of the secondary origin group (valid when `OriginType=ORIGIN_GROUP`). If it’s not specified, it indicates that secondary origins are not used.
     * @param string $PrivateAccess Whether to authenticate access to the private object storage origin (valid when `OriginType=COS/AWS_S3`). Values: 
<li>`on`: Enable private authentication.</li>
<li>`off`: Disable private authentication.</li>If this field is not specified, the default value `off` is used.
     * @param array $PrivateParameters The private authentication parameters. This field is valid when `PrivateAccess=on`.
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
        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("BackupOrigin",$param) and $param["BackupOrigin"] !== null) {
            $this->BackupOrigin = $param["BackupOrigin"];
        }

        if (array_key_exists("PrivateAccess",$param) and $param["PrivateAccess"] !== null) {
            $this->PrivateAccess = $param["PrivateAccess"];
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
