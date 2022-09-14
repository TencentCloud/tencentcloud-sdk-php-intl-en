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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The information of optional web components
 *
 * @method string getType() Obtain Type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPublicUrl() Obtain Public URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPublicUrl(string $PublicUrl) Set Public URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPrivateUrl() Obtain Private URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrivateUrl(string $PrivateUrl) Set Private URL
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPublicAccess() Obtain Public network access
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPublicAccess(string $PublicAccess) Set Public network access
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPrivateAccess() Obtain Private network access
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPrivateAccess(string $PrivateAccess) Set Private network access
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVersion() Obtain Version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersion(string $Version) Set Version
Note: This field may return null, indicating that no valid values can be obtained.
 */
class OptionalWebServiceInfo extends AbstractModel
{
    /**
     * @var string Type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var integer Status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Public URL
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PublicUrl;

    /**
     * @var string Private URL
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PrivateUrl;

    /**
     * @var string Public network access
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PublicAccess;

    /**
     * @var string Private network access
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PrivateAccess;

    /**
     * @var string Version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @param string $Type Type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PublicUrl Public URL
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PrivateUrl Private URL
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PublicAccess Public network access
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PrivateAccess Private network access
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Version Version
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PublicUrl",$param) and $param["PublicUrl"] !== null) {
            $this->PublicUrl = $param["PublicUrl"];
        }

        if (array_key_exists("PrivateUrl",$param) and $param["PrivateUrl"] !== null) {
            $this->PrivateUrl = $param["PrivateUrl"];
        }

        if (array_key_exists("PublicAccess",$param) and $param["PublicAccess"] !== null) {
            $this->PublicAccess = $param["PublicAccess"];
        }

        if (array_key_exists("PrivateAccess",$param) and $param["PrivateAccess"] !== null) {
            $this->PrivateAccess = $param["PrivateAccess"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
