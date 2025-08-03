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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Object containing only ID
 *
 * @method integer getId() Obtain Request ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(integer $Id) Set Request ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAccessKey() Obtain key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccessKey(string $AccessKey) Set key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProjectId() Obtain id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(integer $ProjectId) Set id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTranId() Obtain Transaction ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTranId(string $TranId) Set Transaction ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTranStatus() Obtain Transaction status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTranStatus(integer $TranStatus) Set Transaction status.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class IdDTO extends AbstractModel
{
    /**
     * @var integer Request ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @var string key
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccessKey;

    /**
     * @var integer id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Transaction ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TranId;

    /**
     * @var integer Transaction status.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TranStatus;

    /**
     * @param integer $Id Request ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AccessKey key
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ProjectId id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TranId Transaction ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TranStatus Transaction status.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("TranId",$param) and $param["TranId"] !== null) {
            $this->TranId = $param["TranId"];
        }

        if (array_key_exists("TranStatus",$param) and $param["TranStatus"] !== null) {
            $this->TranStatus = $param["TranStatus"];
        }
    }
}
