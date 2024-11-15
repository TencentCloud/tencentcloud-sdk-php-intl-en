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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterImage request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getImageId() Obtain Specifies a valid image ID in the format like img-xxxx. You can query it by logging in to the console, or by calling the API [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) to get the ImageId field in the returned information.
 * @method void setImageId(string $ImageId) Set Specifies a valid image ID in the format like img-xxxx. You can query it by logging in to the console, or by calling the API [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) to get the ImageId field in the returned information.
 */
class ModifyClusterImageRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Specifies a valid image ID in the format like img-xxxx. You can query it by logging in to the console, or by calling the API [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) to get the ImageId field in the returned information.
     */
    public $ImageId;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $ImageId Specifies a valid image ID in the format like img-xxxx. You can query it by logging in to the console, or by calling the API [DescribeImages](https://intl.cloud.tencent.com/document/api/213/15715?from_cn_redirect=1) to get the ImageId field in the returned information.
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }
    }
}
