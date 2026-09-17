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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getSwitch() Obtain https configuration switch. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
 * @method void setSwitch(string $Switch) Set https configuration switch. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
 * @method string getHttp2() Obtain http/2 configuration switch. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
 * @method void setHttp2(string $Http2) Set http/2 configuration switch. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
 * @method CDNCertInfo getCertInfo() Obtain 
 * @method void setCertInfo(CDNCertInfo $CertInfo) Set 
 */
class Https extends AbstractModel
{
    /**
     * @var string https configuration switch. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
     */
    public $Switch;

    /**
     * @var string http/2 configuration switch. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
     */
    public $Http2;

    /**
     * @var CDNCertInfo 
     */
    public $CertInfo;

    /**
     * @param string $Switch https configuration switch. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
     * @param string $Http2 http/2 configuration switch. Value:
<li>`on`: Enable;</li>
<li>`off`: Cache.</li>
     * @param CDNCertInfo $CertInfo 
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Http2",$param) and $param["Http2"] !== null) {
            $this->Http2 = $param["Http2"];
        }

        if (array_key_exists("CertInfo",$param) and $param["CertInfo"] !== null) {
            $this->CertInfo = new CDNCertInfo();
            $this->CertInfo->deserialize($param["CertInfo"]);
        }
    }
}
