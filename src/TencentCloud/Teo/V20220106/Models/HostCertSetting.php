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
 * Certificate configurations for domain names
 *
 * @method string getHost() Obtain Domain name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setHost(string $Host) Set Domain name
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getCertInfo() Obtain Server certificate configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCertInfo(array $CertInfo) Set Server certificate configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class HostCertSetting extends AbstractModel
{
    /**
     * @var string Domain name
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Host;

    /**
     * @var array Server certificate configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CertInfo;

    /**
     * @param string $Host Domain name
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $CertInfo Server certificate configuration
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("CertInfo",$param) and $param["CertInfo"] !== null) {
            $this->CertInfo = [];
            foreach ($param["CertInfo"] as $key => $value){
                $obj = new ServerCertInfo();
                $obj->deserialize($value);
                array_push($this->CertInfo, $obj);
            }
        }
    }
}
