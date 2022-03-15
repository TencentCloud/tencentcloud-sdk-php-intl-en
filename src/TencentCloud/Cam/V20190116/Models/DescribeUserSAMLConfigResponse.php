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
 * DescribeUserSAMLConfig response structure.
 *
 * @method string getSAMLMetadata() Obtain SAML metadata document.
 * @method void setSAMLMetadata(string $SAMLMetadata) Set SAML metadata document.
 * @method integer getStatus() Obtain Status. `0`: not set, `1`: enabled, `2`: disabled.
 * @method void setStatus(integer $Status) Set Status. `0`: not set, `1`: enabled, `2`: disabled.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeUserSAMLConfigResponse extends AbstractModel
{
    /**
     * @var string SAML metadata document.
     */
    public $SAMLMetadata;

    /**
     * @var integer Status. `0`: not set, `1`: enabled, `2`: disabled.
     */
    public $Status;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $SAMLMetadata SAML metadata document.
     * @param integer $Status Status. `0`: not set, `1`: enabled, `2`: disabled.
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
        if (array_key_exists("SAMLMetadata",$param) and $param["SAMLMetadata"] !== null) {
            $this->SAMLMetadata = $param["SAMLMetadata"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
