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
namespace TencentCloud\Sts\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetFederationToken request structure.
 *
 * @method string getName() Obtain The customizable name of the caller, consisting of letters
 * @method void setName(string $Name) Set The customizable name of the caller, consisting of letters
 * @method string getPolicy() Obtain Note:

The policy syntax refers to [CAM's Syntax Logic](https://intl.cloud.tencent.com/document/product/598/10603?from_cn_redirect=1).
The policy cannot contain the principal element.
This parameter needs to be URL-encoded. The server will URL-decode this field and grant temporary access credentials based on the processed policy. Please pass the parameter according to the specification.
 * @method void setPolicy(string $Policy) Set Note:

The policy syntax refers to [CAM's Syntax Logic](https://intl.cloud.tencent.com/document/product/598/10603?from_cn_redirect=1).
The policy cannot contain the principal element.
This parameter needs to be URL-encoded. The server will URL-decode this field and grant temporary access credentials based on the processed policy. Please pass the parameter according to the specification.
 * @method integer getDurationSeconds() Obtain The validity period of temporary credentials in seconds. Default value: 1,800s. Maximum value for a root account: 7,200s. Maximum value for a sub-account: 129,600s.
 * @method void setDurationSeconds(integer $DurationSeconds) Set The validity period of temporary credentials in seconds. Default value: 1,800s. Maximum value for a root account: 7,200s. Maximum value for a sub-account: 129,600s.
 */
class GetFederationTokenRequest extends AbstractModel
{
    /**
     * @var string The customizable name of the caller, consisting of letters
     */
    public $Name;

    /**
     * @var string Note:

The policy syntax refers to [CAM's Syntax Logic](https://intl.cloud.tencent.com/document/product/598/10603?from_cn_redirect=1).
The policy cannot contain the principal element.
This parameter needs to be URL-encoded. The server will URL-decode this field and grant temporary access credentials based on the processed policy. Please pass the parameter according to the specification.
     */
    public $Policy;

    /**
     * @var integer The validity period of temporary credentials in seconds. Default value: 1,800s. Maximum value for a root account: 7,200s. Maximum value for a sub-account: 129,600s.
     */
    public $DurationSeconds;

    /**
     * @param string $Name The customizable name of the caller, consisting of letters
     * @param string $Policy Note:

The policy syntax refers to [CAM's Syntax Logic](https://intl.cloud.tencent.com/document/product/598/10603?from_cn_redirect=1).
The policy cannot contain the principal element.
This parameter needs to be URL-encoded. The server will URL-decode this field and grant temporary access credentials based on the processed policy. Please pass the parameter according to the specification.
     * @param integer $DurationSeconds The validity period of temporary credentials in seconds. Default value: 1,800s. Maximum value for a root account: 7,200s. Maximum value for a sub-account: 129,600s.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("DurationSeconds",$param) and $param["DurationSeconds"] !== null) {
            $this->DurationSeconds = $param["DurationSeconds"];
        }
    }
}
