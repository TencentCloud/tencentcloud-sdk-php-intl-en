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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyImageSharePermission request structure.
 *
 * @method string getImageId() Obtain Image ID, which can be obtained through the ImageId in the returned value of the [DescribeImages](https://www.tencentcloud.com/document/api/213/15715?from_cn_redirect=1) API.
 * @method void setImageId(string $ImageId) Set Image ID, which can be obtained through the ImageId in the returned value of the [DescribeImages](https://www.tencentcloud.com/document/api/213/15715?from_cn_redirect=1) API.
 * @method string getPermission() Obtain Sharing property, including SHARE and CANCEL. Among them, SHARE indicates sharing, and CANCEL indicates canceling sharing.
 * @method void setPermission(string $Permission) Set Sharing property, including SHARE and CANCEL. Among them, SHARE indicates sharing, and CANCEL indicates canceling sharing.
 */
class ModifyImageSharePermissionRequest extends AbstractModel
{
    /**
     * @var string Image ID, which can be obtained through the ImageId in the returned value of the [DescribeImages](https://www.tencentcloud.com/document/api/213/15715?from_cn_redirect=1) API.
     */
    public $ImageId;

    /**
     * @var string Sharing property, including SHARE and CANCEL. Among them, SHARE indicates sharing, and CANCEL indicates canceling sharing.
     */
    public $Permission;

    /**
     * @param string $ImageId Image ID, which can be obtained through the ImageId in the returned value of the [DescribeImages](https://www.tencentcloud.com/document/api/213/15715?from_cn_redirect=1) API.
     * @param string $Permission Sharing property, including SHARE and CANCEL. Among them, SHARE indicates sharing, and CANCEL indicates canceling sharing.
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }
    }
}
