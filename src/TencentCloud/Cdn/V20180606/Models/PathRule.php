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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Path-based origin-pull configuration rules
 *
 * @method boolean getRegex() Obtain Whether regex match is used.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setRegex(boolean $Regex) Set Whether regex match is used.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getPath() Obtain URL path
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setPath(string $Path) Set URL path
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getOrigin() Obtain Origin-pull server when the path matches.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setOrigin(string $Origin) Set Origin-pull server when the path matches.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getServerName() Obtain Origin-pull host when the path matches.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setServerName(string $ServerName) Set Origin-pull host when the path matches.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getOriginArea() Obtain The region of origin server. Valid values: `CN` (mainland China), `OV` (outside mainland China)
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setOriginArea(string $OriginArea) Set The region of origin server. Valid values: `CN` (mainland China), `OV` (outside mainland China)
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getForwardUri() Obtain Origin-pull URI path when the path matches.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setForwardUri(string $ForwardUri) Set Origin-pull URI path when the path matches.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method array getRequestHeaders() Obtain Origin-pull header setting when the path matches.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setRequestHeaders(array $RequestHeaders) Set Origin-pull header setting when the path matches.
Note: this field may return `null`, indicating that no valid value is obtained.
 */
class PathRule extends AbstractModel
{
    /**
     * @var boolean Whether regex match is used.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $Regex;

    /**
     * @var string URL path
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $Path;

    /**
     * @var string Origin-pull server when the path matches.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $Origin;

    /**
     * @var string Origin-pull host when the path matches.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $ServerName;

    /**
     * @var string The region of origin server. Valid values: `CN` (mainland China), `OV` (outside mainland China)
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $OriginArea;

    /**
     * @var string Origin-pull URI path when the path matches.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $ForwardUri;

    /**
     * @var array Origin-pull header setting when the path matches.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $RequestHeaders;

    /**
     * @param boolean $Regex Whether regex match is used.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $Path URL path
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $Origin Origin-pull server when the path matches.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $ServerName Origin-pull host when the path matches.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $OriginArea The region of origin server. Valid values: `CN` (mainland China), `OV` (outside mainland China)
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $ForwardUri Origin-pull URI path when the path matches.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param array $RequestHeaders Origin-pull header setting when the path matches.
Note: this field may return `null`, indicating that no valid value is obtained.
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
        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("OriginArea",$param) and $param["OriginArea"] !== null) {
            $this->OriginArea = $param["OriginArea"];
        }

        if (array_key_exists("ForwardUri",$param) and $param["ForwardUri"] !== null) {
            $this->ForwardUri = $param["ForwardUri"];
        }

        if (array_key_exists("RequestHeaders",$param) and $param["RequestHeaders"] !== null) {
            $this->RequestHeaders = [];
            foreach ($param["RequestHeaders"] as $key => $value){
                $obj = new HttpHeaderRule();
                $obj->deserialize($value);
                array_push($this->RequestHeaders, $obj);
            }
        }
    }
}
