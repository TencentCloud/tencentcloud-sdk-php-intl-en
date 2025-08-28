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
 * 
 *
 * @method string getPublishDatabase() Obtain 
 * @method void setPublishDatabase(string $PublishDatabase) Set 
 * @method string getSubscribeDatabase() Obtain 
 * @method void setSubscribeDatabase(string $SubscribeDatabase) Set 
 */
class DatabaseTuple extends AbstractModel
{
    /**
     * @var string 
     */
    public $PublishDatabase;

    /**
     * @var string 
     */
    public $SubscribeDatabase;

    /**
     * @param string $PublishDatabase 
     * @param string $SubscribeDatabase 
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
        if (array_key_exists("PublishDatabase",$param) and $param["PublishDatabase"] !== null) {
            $this->PublishDatabase = $param["PublishDatabase"];
        }

        if (array_key_exists("SubscribeDatabase",$param) and $param["SubscribeDatabase"] !== null) {
            $this->SubscribeDatabase = $param["SubscribeDatabase"];
        }
    }
}
