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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSecret response structure.
 *
 * @method string getSecretName() Obtain Name of the new Secret.
 * @method void setSecretName(string $SecretName) Set Name of the new Secret.
 * @method string getVersionId() Obtain ID of the new Secret version.
 * @method void setVersionId(string $VersionId) Set ID of the new Secret version.
 * @method integer getTagCode() Obtain Return code of tag operation. `0`: success; `1`: internal error; `2`: business processing error
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTagCode(integer $TagCode) Set Return code of tag operation. `0`: success; `1`: internal error; `2`: business processing error
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getTagMsg() Obtain Return message of tag operation.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTagMsg(string $TagMsg) Set Return message of tag operation.
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class CreateSecretResponse extends AbstractModel
{
    /**
     * @var string Name of the new Secret.
     */
    public $SecretName;

    /**
     * @var string ID of the new Secret version.
     */
    public $VersionId;

    /**
     * @var integer Return code of tag operation. `0`: success; `1`: internal error; `2`: business processing error
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $TagCode;

    /**
     * @var string Return message of tag operation.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $TagMsg;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $SecretName Name of the new Secret.
     * @param string $VersionId ID of the new Secret version.
     * @param integer $TagCode Return code of tag operation. `0`: success; `1`: internal error; `2`: business processing error
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $TagMsg Return message of tag operation.
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("TagCode",$param) and $param["TagCode"] !== null) {
            $this->TagCode = $param["TagCode"];
        }

        if (array_key_exists("TagMsg",$param) and $param["TagMsg"] !== null) {
            $this->TagMsg = $param["TagMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
