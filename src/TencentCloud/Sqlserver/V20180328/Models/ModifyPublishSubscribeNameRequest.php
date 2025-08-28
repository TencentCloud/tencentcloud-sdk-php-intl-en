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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPublishSubscribeName request structure.
 *
 * @method integer getPublishSubscribeId() Obtain Publish/subscribe ID.
 * @method void setPublishSubscribeId(integer $PublishSubscribeId) Set Publish/subscribe ID.
 * @method string getPublishSubscribeName() Obtain Publish/subscribe name to be modified.
 * @method void setPublishSubscribeName(string $PublishSubscribeName) Set Publish/subscribe name to be modified.
 */
class ModifyPublishSubscribeNameRequest extends AbstractModel
{
    /**
     * @var integer Publish/subscribe ID.
     */
    public $PublishSubscribeId;

    /**
     * @var string Publish/subscribe name to be modified.
     */
    public $PublishSubscribeName;

    /**
     * @param integer $PublishSubscribeId Publish/subscribe ID.
     * @param string $PublishSubscribeName Publish/subscribe name to be modified.
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
        if (array_key_exists("PublishSubscribeId",$param) and $param["PublishSubscribeId"] !== null) {
            $this->PublishSubscribeId = $param["PublishSubscribeId"];
        }

        if (array_key_exists("PublishSubscribeName",$param) and $param["PublishSubscribeName"] !== null) {
            $this->PublishSubscribeName = $param["PublishSubscribeName"];
        }
    }
}
