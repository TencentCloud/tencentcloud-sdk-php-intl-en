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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StartPublishStreamWithURL request structure.
 *
 * @method string getUserId() Obtain Unique user ID, which is customized by you and is not parsed by CAR.
 * @method void setUserId(string $UserId) Set Unique user ID, which is customized by you and is not parsed by CAR.
 * @method string getPublishStreamURL() Obtain Streaming address. Only RTMP is supported for streaming currently.
 * @method void setPublishStreamURL(string $PublishStreamURL) Set Streaming address. Only RTMP is supported for streaming currently.
 */
class StartPublishStreamWithURLRequest extends AbstractModel
{
    /**
     * @var string Unique user ID, which is customized by you and is not parsed by CAR.
     */
    public $UserId;

    /**
     * @var string Streaming address. Only RTMP is supported for streaming currently.
     */
    public $PublishStreamURL;

    /**
     * @param string $UserId Unique user ID, which is customized by you and is not parsed by CAR.
     * @param string $PublishStreamURL Streaming address. Only RTMP is supported for streaming currently.
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("PublishStreamURL",$param) and $param["PublishStreamURL"] !== null) {
            $this->PublishStreamURL = $param["PublishStreamURL"];
        }
    }
}
