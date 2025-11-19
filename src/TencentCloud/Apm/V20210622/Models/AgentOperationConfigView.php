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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Related configurations of the probe APIs.
 *
 * @method boolean getRetentionValid() Obtain Whether allowlist configuration is enabled for the current API.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRetentionValid(boolean $RetentionValid) Set Whether allowlist configuration is enabled for the current API.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIgnoreOperation() Obtain Effective when RetentionValid is false. It indicates blocklist configuration in API settings. The APIs specified in the configuration do not support collection.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIgnoreOperation(string $IgnoreOperation) Set Effective when RetentionValid is false. It indicates blocklist configuration in API settings. The APIs specified in the configuration do not support collection.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRetentionOperation() Obtain Effective when RetentionValid is true. It indicates allowlist configuration in API settings. Only the APIs specified in the configuration support collection.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRetentionOperation(string $RetentionOperation) Set Effective when RetentionValid is true. It indicates allowlist configuration in API settings. Only the APIs specified in the configuration support collection.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AgentOperationConfigView extends AbstractModel
{
    /**
     * @var boolean Whether allowlist configuration is enabled for the current API.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RetentionValid;

    /**
     * @var string Effective when RetentionValid is false. It indicates blocklist configuration in API settings. The APIs specified in the configuration do not support collection.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IgnoreOperation;

    /**
     * @var string Effective when RetentionValid is true. It indicates allowlist configuration in API settings. Only the APIs specified in the configuration support collection.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RetentionOperation;

    /**
     * @param boolean $RetentionValid Whether allowlist configuration is enabled for the current API.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IgnoreOperation Effective when RetentionValid is false. It indicates blocklist configuration in API settings. The APIs specified in the configuration do not support collection.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RetentionOperation Effective when RetentionValid is true. It indicates allowlist configuration in API settings. Only the APIs specified in the configuration support collection.
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
        if (array_key_exists("RetentionValid",$param) and $param["RetentionValid"] !== null) {
            $this->RetentionValid = $param["RetentionValid"];
        }

        if (array_key_exists("IgnoreOperation",$param) and $param["IgnoreOperation"] !== null) {
            $this->IgnoreOperation = $param["IgnoreOperation"];
        }

        if (array_key_exists("RetentionOperation",$param) and $param["RetentionOperation"] !== null) {
            $this->RetentionOperation = $param["RetentionOperation"];
        }
    }
}
