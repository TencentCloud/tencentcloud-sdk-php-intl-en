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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListSAMLProviders response structure.
 *
 * @method integer getTotalCount() Obtain Total number of SAML identity providers
 * @method void setTotalCount(integer $TotalCount) Set Total number of SAML identity providers
 * @method array getSAMLProviderSet() Obtain List of SAML identity providers
 * @method void setSAMLProviderSet(array $SAMLProviderSet) Set List of SAML identity providers
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class ListSAMLProvidersResponse extends AbstractModel
{
    /**
     * @var integer Total number of SAML identity providers
     */
    public $TotalCount;

    /**
     * @var array List of SAML identity providers
     */
    public $SAMLProviderSet;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount Total number of SAML identity providers
     * @param array $SAMLProviderSet List of SAML identity providers
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("SAMLProviderSet",$param) and $param["SAMLProviderSet"] !== null) {
            $this->SAMLProviderSet = [];
            foreach ($param["SAMLProviderSet"] as $key => $value){
                $obj = new SAMLProviderInfo();
                $obj->deserialize($value);
                array_push($this->SAMLProviderSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
