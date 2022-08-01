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
 * Details of the blocked URLs
 *
 * @method string getStatus() Obtain Status. `disable`: Blocked; `enable`: Unblocked.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setStatus(string $Status) Set Status. `disable`: Blocked; `enable`: Unblocked.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRealUrl() Obtain Corresponding URL
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setRealUrl(string $RealUrl) Set Corresponding URL
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Creation time
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation time
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getUpdateTime() Obtain Update time.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class UrlRecord extends AbstractModel
{
    /**
     * @var string Status. `disable`: Blocked; `enable`: Unblocked.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @var string Corresponding URL
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $RealUrl;

    /**
     * @var string Creation time
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Update time.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $UpdateTime;

    /**
     * @param string $Status Status. `disable`: Blocked; `enable`: Unblocked.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $RealUrl Corresponding URL
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $CreateTime Creation time
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $UpdateTime Update time.
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RealUrl",$param) and $param["RealUrl"] !== null) {
            $this->RealUrl = $param["RealUrl"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
