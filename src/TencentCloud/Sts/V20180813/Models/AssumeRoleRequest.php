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
namespace TencentCloud\Sts\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssumeRole request structure.
 *
 * @method string getRoleArn() Obtain Resource descriptions of a role, which can be obtained by clicking the role name in the [CAM console](https://console.cloud.tencent.com/cam/role).
General role:
qcs::cam::uin/12345678:role/4611686018427397919, qcs::cam::uin/12345678:roleName/testRoleName
Service role:
qcs::cam::uin/12345678:role/tencentcloudServiceRole/4611686018427397920, qcs::cam::uin/12345678:role/tencentcloudServiceRoleName/testServiceRoleName
 * @method void setRoleArn(string $RoleArn) Set Resource descriptions of a role, which can be obtained by clicking the role name in the [CAM console](https://console.cloud.tencent.com/cam/role).
General role:
qcs::cam::uin/12345678:role/4611686018427397919, qcs::cam::uin/12345678:roleName/testRoleName
Service role:
qcs::cam::uin/12345678:role/tencentcloudServiceRole/4611686018427397920, qcs::cam::uin/12345678:role/tencentcloudServiceRoleName/testServiceRoleName
 * @method string getRoleSessionName() Obtain User-defined temporary session name.
It can contain 2-128 letters, digits, and symbols (=,.@_-). Regex: [\w+=,.@_-]*
 * @method void setRoleSessionName(string $RoleSessionName) Set User-defined temporary session name.
It can contain 2-128 letters, digits, and symbols (=,.@_-). Regex: [\w+=,.@_-]*
 * @method integer getDurationSeconds() Obtain Specifies the validity period of credentials in seconds. Default value: 7200. Maximum value: 43200
 * @method void setDurationSeconds(integer $DurationSeconds) Set Specifies the validity period of credentials in seconds. Default value: 7200. Maximum value: 43200
 * @method string getPolicy() Obtain Policy description
Note:
1. The policy needs to be URL-encoded (if you request a TencentCloud API through the GET method, all parameters must be URL-encoded again in accordance with [Signature v3](https://intl.cloud.tencent.com/document/api/598/33159?from_cn_redirect=1#1.-.E6.8B.BC.E6.8E.A5.E8.A7.84.E8.8C.83.E8.AF.B7.E6.B1.82.E4.B8.B2) before the request is sent).
2. For the policy syntax, please see CAM's [Syntax Logic](https://intl.cloud.tencent.com/document/product/598/10603?from_cn_redirect=1).
3. The policy cannot contain the `principal` element.
 * @method void setPolicy(string $Policy) Set Policy description
Note:
1. The policy needs to be URL-encoded (if you request a TencentCloud API through the GET method, all parameters must be URL-encoded again in accordance with [Signature v3](https://intl.cloud.tencent.com/document/api/598/33159?from_cn_redirect=1#1.-.E6.8B.BC.E6.8E.A5.E8.A7.84.E8.8C.83.E8.AF.B7.E6.B1.82.E4.B8.B2) before the request is sent).
2. For the policy syntax, please see CAM's [Syntax Logic](https://intl.cloud.tencent.com/document/product/598/10603?from_cn_redirect=1).
3. The policy cannot contain the `principal` element.
 * @method string getExternalId() Obtain External role ID, which can be obtained by clicking the role name in the [CAM console](https://console.cloud.tencent.com/cam/role).
It can contain 2-128 letters, digits, and symbols (=,.@:/-). Regex: [\w+=,.@:\/-]*
 * @method void setExternalId(string $ExternalId) Set External role ID, which can be obtained by clicking the role name in the [CAM console](https://console.cloud.tencent.com/cam/role).
It can contain 2-128 letters, digits, and symbols (=,.@:/-). Regex: [\w+=,.@:\/-]*
 * @method array getTags() Obtain List of session tags. Up to 50 tags are allowed. The tag keys can not duplicate.
 * @method void setTags(array $Tags) Set List of session tags. Up to 50 tags are allowed. The tag keys can not duplicate.
 * @method string getSourceIdentity() Obtain UIN of the initiator
 * @method void setSourceIdentity(string $SourceIdentity) Set UIN of the initiator
 */
class AssumeRoleRequest extends AbstractModel
{
    /**
     * @var string Resource descriptions of a role, which can be obtained by clicking the role name in the [CAM console](https://console.cloud.tencent.com/cam/role).
General role:
qcs::cam::uin/12345678:role/4611686018427397919, qcs::cam::uin/12345678:roleName/testRoleName
Service role:
qcs::cam::uin/12345678:role/tencentcloudServiceRole/4611686018427397920, qcs::cam::uin/12345678:role/tencentcloudServiceRoleName/testServiceRoleName
     */
    public $RoleArn;

    /**
     * @var string User-defined temporary session name.
It can contain 2-128 letters, digits, and symbols (=,.@_-). Regex: [\w+=,.@_-]*
     */
    public $RoleSessionName;

    /**
     * @var integer Specifies the validity period of credentials in seconds. Default value: 7200. Maximum value: 43200
     */
    public $DurationSeconds;

    /**
     * @var string Policy description
Note:
1. The policy needs to be URL-encoded (if you request a TencentCloud API through the GET method, all parameters must be URL-encoded again in accordance with [Signature v3](https://intl.cloud.tencent.com/document/api/598/33159?from_cn_redirect=1#1.-.E6.8B.BC.E6.8E.A5.E8.A7.84.E8.8C.83.E8.AF.B7.E6.B1.82.E4.B8.B2) before the request is sent).
2. For the policy syntax, please see CAM's [Syntax Logic](https://intl.cloud.tencent.com/document/product/598/10603?from_cn_redirect=1).
3. The policy cannot contain the `principal` element.
     */
    public $Policy;

    /**
     * @var string External role ID, which can be obtained by clicking the role name in the [CAM console](https://console.cloud.tencent.com/cam/role).
It can contain 2-128 letters, digits, and symbols (=,.@:/-). Regex: [\w+=,.@:\/-]*
     */
    public $ExternalId;

    /**
     * @var array List of session tags. Up to 50 tags are allowed. The tag keys can not duplicate.
     */
    public $Tags;

    /**
     * @var string UIN of the initiator
     */
    public $SourceIdentity;

    /**
     * @param string $RoleArn Resource descriptions of a role, which can be obtained by clicking the role name in the [CAM console](https://console.cloud.tencent.com/cam/role).
General role:
qcs::cam::uin/12345678:role/4611686018427397919, qcs::cam::uin/12345678:roleName/testRoleName
Service role:
qcs::cam::uin/12345678:role/tencentcloudServiceRole/4611686018427397920, qcs::cam::uin/12345678:role/tencentcloudServiceRoleName/testServiceRoleName
     * @param string $RoleSessionName User-defined temporary session name.
It can contain 2-128 letters, digits, and symbols (=,.@_-). Regex: [\w+=,.@_-]*
     * @param integer $DurationSeconds Specifies the validity period of credentials in seconds. Default value: 7200. Maximum value: 43200
     * @param string $Policy Policy description
Note:
1. The policy needs to be URL-encoded (if you request a TencentCloud API through the GET method, all parameters must be URL-encoded again in accordance with [Signature v3](https://intl.cloud.tencent.com/document/api/598/33159?from_cn_redirect=1#1.-.E6.8B.BC.E6.8E.A5.E8.A7.84.E8.8C.83.E8.AF.B7.E6.B1.82.E4.B8.B2) before the request is sent).
2. For the policy syntax, please see CAM's [Syntax Logic](https://intl.cloud.tencent.com/document/product/598/10603?from_cn_redirect=1).
3. The policy cannot contain the `principal` element.
     * @param string $ExternalId External role ID, which can be obtained by clicking the role name in the [CAM console](https://console.cloud.tencent.com/cam/role).
It can contain 2-128 letters, digits, and symbols (=,.@:/-). Regex: [\w+=,.@:\/-]*
     * @param array $Tags List of session tags. Up to 50 tags are allowed. The tag keys can not duplicate.
     * @param string $SourceIdentity UIN of the initiator
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
        if (array_key_exists("RoleArn",$param) and $param["RoleArn"] !== null) {
            $this->RoleArn = $param["RoleArn"];
        }

        if (array_key_exists("RoleSessionName",$param) and $param["RoleSessionName"] !== null) {
            $this->RoleSessionName = $param["RoleSessionName"];
        }

        if (array_key_exists("DurationSeconds",$param) and $param["DurationSeconds"] !== null) {
            $this->DurationSeconds = $param["DurationSeconds"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("ExternalId",$param) and $param["ExternalId"] !== null) {
            $this->ExternalId = $param["ExternalId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SourceIdentity",$param) and $param["SourceIdentity"] !== null) {
            $this->SourceIdentity = $param["SourceIdentity"];
        }
    }
}
