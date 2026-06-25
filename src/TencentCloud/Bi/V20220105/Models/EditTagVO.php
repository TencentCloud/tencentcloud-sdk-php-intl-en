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
 * Sync tag data output parameters
 *
 * @method string getTranId() Obtain Transaction ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTranId(string $TranId) Set Transaction ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTranStatus() Obtain Transaction status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTranStatus(integer $TranStatus) Set Transaction status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getId() Obtain Tag information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setId(integer $Id) Set Tag information.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class EditTagVO extends AbstractModel
{
    /**
     * @var string Transaction ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TranId;

    /**
     * @var integer Transaction status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TranStatus;

    /**
     * @var integer Tag information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Id;

    /**
     * @param string $TranId Transaction ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TranStatus Transaction status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Id Tag information.
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
        if (array_key_exists("TranId",$param) and $param["TranId"] !== null) {
            $this->TranId = $param["TranId"];
        }

        if (array_key_exists("TranStatus",$param) and $param["TranStatus"] !== null) {
            $this->TranStatus = $param["TranStatus"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
