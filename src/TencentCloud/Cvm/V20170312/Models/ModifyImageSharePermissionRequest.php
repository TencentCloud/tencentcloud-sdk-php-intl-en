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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getImageId() Obtain Image ID such as `img-gvbnzy6f`. You can obtain the image IDs in two ways: <br><li>Call [DescribeImages](https://cloud.tencent.com/document/api/213/15715) and look for `ImageId` in the response. <br><li>Look for the information in the [Image Console](https://console.cloud.tencent.com/cvm/image). <br>You can only specify an image in the `NORMAL` state. For more information on image states, see [here](/document/api/213/9452#image_state).
 * @method void setImageId(string $ImageId) Set Image ID such as `img-gvbnzy6f`. You can obtain the image IDs in two ways: <br><li>Call [DescribeImages](https://cloud.tencent.com/document/api/213/15715) and look for `ImageId` in the response. <br><li>Look for the information in the [Image Console](https://console.cloud.tencent.com/cvm/image). <br>You can only specify an image in the `NORMAL` state. For more information on image states, see [here](/document/api/213/9452#image_state).
 * @method array getAccountIds() Obtain List of account IDs with which an image is shared. For the format of array-type parameters, see [API Introduction](/document/api/213/568). The account ID is different from the QQ number. You can find the account ID in [Account Information](https://console.cloud.tencent.com/developer). 
 * @method void setAccountIds(array $AccountIds) Set List of account IDs with which an image is shared. For the format of array-type parameters, see [API Introduction](/document/api/213/568). The account ID is different from the QQ number. You can find the account ID in [Account Information](https://console.cloud.tencent.com/developer). 
 * @method string getPermission() Obtain Operations. Valid values: `SHARE`, sharing an image; `CANCEL`, cancelling an image sharing. 
 * @method void setPermission(string $Permission) Set Operations. Valid values: `SHARE`, sharing an image; `CANCEL`, cancelling an image sharing. 
 */

/**
 *ModifyImageSharePermission request structure.
 */
class ModifyImageSharePermissionRequest extends AbstractModel
{
    /**
     * @var string Image ID such as `img-gvbnzy6f`. You can obtain the image IDs in two ways: <br><li>Call [DescribeImages](https://cloud.tencent.com/document/api/213/15715) and look for `ImageId` in the response. <br><li>Look for the information in the [Image Console](https://console.cloud.tencent.com/cvm/image). <br>You can only specify an image in the `NORMAL` state. For more information on image states, see [here](/document/api/213/9452#image_state).
     */
    public $ImageId;

    /**
     * @var array List of account IDs with which an image is shared. For the format of array-type parameters, see [API Introduction](/document/api/213/568). The account ID is different from the QQ number. You can find the account ID in [Account Information](https://console.cloud.tencent.com/developer). 
     */
    public $AccountIds;

    /**
     * @var string Operations. Valid values: `SHARE`, sharing an image; `CANCEL`, cancelling an image sharing. 
     */
    public $Permission;
    /**
     * @param string $ImageId Image ID such as `img-gvbnzy6f`. You can obtain the image IDs in two ways: <br><li>Call [DescribeImages](https://cloud.tencent.com/document/api/213/15715) and look for `ImageId` in the response. <br><li>Look for the information in the [Image Console](https://console.cloud.tencent.com/cvm/image). <br>You can only specify an image in the `NORMAL` state. For more information on image states, see [here](/document/api/213/9452#image_state).
     * @param array $AccountIds List of account IDs with which an image is shared. For the format of array-type parameters, see [API Introduction](/document/api/213/568). The account ID is different from the QQ number. You can find the account ID in [Account Information](https://console.cloud.tencent.com/developer). 
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
