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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UnbindCloudResource request structure.
 *
 * @method string getKeyId() Obtain CMK ID
 * @method void setKeyId(string $KeyId) Set CMK ID
 * @method string getProductId() Obtain Unique ID of a Tencent Cloud service
 * @method void setProductId(string $ProductId) Set Unique ID of a Tencent Cloud service
 * @method string getResourceId() Obtain Resource/instance ID, which is stored as a string and defined by the caller based on the Tencent Cloud service's features.
 * @method void setResourceId(string $ResourceId) Set Resource/instance ID, which is stored as a string and defined by the caller based on the Tencent Cloud service's features.
 */
class UnbindCloudResourceRequest extends AbstractModel
{
    /**
     * @var string CMK ID
     */
    public $KeyId;

    /**
     * @var string Unique ID of a Tencent Cloud service
     */
    public $ProductId;

    /**
     * @var string Resource/instance ID, which is stored as a string and defined by the caller based on the Tencent Cloud service's features.
     */
    public $ResourceId;

    /**
     * @param string $KeyId CMK ID
     * @param string $ProductId Unique ID of a Tencent Cloud service
     * @param string $ResourceId Resource/instance ID, which is stored as a string and defined by the caller based on the Tencent Cloud service's features.
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
