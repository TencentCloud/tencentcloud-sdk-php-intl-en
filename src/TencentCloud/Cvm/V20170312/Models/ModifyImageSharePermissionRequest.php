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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyImageSharePermission request structure.
 *
 * @method string getImageId() Obtain Image ID, such as `img-gvbnzy6f`. You can obtain the image ID in the following ways:<br><li>Call the [DescribeImages](https://www.tencentcloud.com/document/api/213/33272) API and find the value of `ImageId` in the response.</li><br><li>Obtain it in the [Image console](https://console.cloud.tencent.com/cvm/image).</li><br>The image ID should correspond to an image in the `NORMAL` state. For more information on image status, see [Image Data Table](https://www.tencentcloud.com/document/api/1103/42519#Image).
 * @method void setImageId(string $ImageId) Set Image ID, such as `img-gvbnzy6f`. You can obtain the image ID in the following ways:<br><li>Call the [DescribeImages](https://www.tencentcloud.com/document/api/213/33272) API and find the value of `ImageId` in the response.</li><br><li>Obtain it in the [Image console](https://console.cloud.tencent.com/cvm/image).</li><br>The image ID should correspond to an image in the `NORMAL` state. For more information on image status, see [Image Data Table](https://www.tencentcloud.com/document/api/1103/42519#Image).
 * @method array getAccountIds() Obtain ID list of root accounts receiving shared images. An account ID is different from a QQ number. For details on root account IDs, refer to the account ID section in [Account Information](https://console.cloud.tencent.com/developer).
 * @method void setAccountIds(array $AccountIds) Set ID list of root accounts receiving shared images. An account ID is different from a QQ number. For details on root account IDs, refer to the account ID section in [Account Information](https://console.cloud.tencent.com/developer).
 * @method string getPermission() Obtain Operations. Valid values: `SHARE`, sharing an image; `CANCEL`, cancelling an image sharing. 
 * @method void setPermission(string $Permission) Set Operations. Valid values: `SHARE`, sharing an image; `CANCEL`, cancelling an image sharing. 
 */
class ModifyImageSharePermissionRequest extends AbstractModel
{
    /**
     * @var string Image ID, such as `img-gvbnzy6f`. You can obtain the image ID in the following ways:<br><li>Call the [DescribeImages](https://www.tencentcloud.com/document/api/213/33272) API and find the value of `ImageId` in the response.</li><br><li>Obtain it in the [Image console](https://console.cloud.tencent.com/cvm/image).</li><br>The image ID should correspond to an image in the `NORMAL` state. For more information on image status, see [Image Data Table](https://www.tencentcloud.com/document/api/1103/42519#Image).
     */
    public $ImageId;

    /**
     * @var array ID list of root accounts receiving shared images. An account ID is different from a QQ number. For details on root account IDs, refer to the account ID section in [Account Information](https://console.cloud.tencent.com/developer).
     */
    public $AccountIds;

    /**
     * @var string Operations. Valid values: `SHARE`, sharing an image; `CANCEL`, cancelling an image sharing. 
     */
    public $Permission;

    /**
     * @param string $ImageId Image ID, such as `img-gvbnzy6f`. You can obtain the image ID in the following ways:<br><li>Call the [DescribeImages](https://www.tencentcloud.com/document/api/213/33272) API and find the value of `ImageId` in the response.</li><br><li>Obtain it in the [Image console](https://console.cloud.tencent.com/cvm/image).</li><br>The image ID should correspond to an image in the `NORMAL` state. For more information on image status, see [Image Data Table](https://www.tencentcloud.com/document/api/1103/42519#Image).
     * @param array $AccountIds ID list of root accounts receiving shared images. An account ID is different from a QQ number. For details on root account IDs, refer to the account ID section in [Account Information](https://console.cloud.tencent.com/developer).
     * @param string $Permission Operations. Valid values: `SHARE`, sharing an image; `CANCEL`, cancelling an image sharing. 
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

        if (array_key_exists("AccountIds",$param) and $param["AccountIds"] !== null) {
            $this->AccountIds = $param["AccountIds"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }
    }
}
