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
 * DescribeZoneDDoSPolicy response structure.
 *
 * @method integer getAppId() Obtain User APPID
 * @method void setAppId(integer $AppId) Set User APPID
 * @method array getShieldAreas() Obtain DDoS mitigation configuration
 * @method void setShieldAreas(array $ShieldAreas) Set DDoS mitigation configuration
 * @method array getDomains() Obtain Includes the details of all subdomain names
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDomains(array $Domains) Set Includes the details of all subdomain names
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeZoneDDoSPolicyResponse extends AbstractModel
{
    /**
     * @var integer User APPID
     */
    public $AppId;

    /**
     * @var array DDoS mitigation configuration
     */
    public $ShieldAreas;

    /**
     * @var array Includes the details of all subdomain names
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Domains;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $AppId User APPID
     * @param array $ShieldAreas DDoS mitigation configuration
     * @param array $Domains Includes the details of all subdomain names
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ShieldAreas",$param) and $param["ShieldAreas"] !== null) {
            $this->ShieldAreas = [];
            foreach ($param["ShieldAreas"] as $key => $value){
                $obj = new ShieldArea();
                $obj->deserialize($value);
                array_push($this->ShieldAreas, $obj);
            }
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = [];
            foreach ($param["Domains"] as $key => $value){
                $obj = new DDoSApplication();
                $obj->deserialize($value);
                array_push($this->Domains, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
