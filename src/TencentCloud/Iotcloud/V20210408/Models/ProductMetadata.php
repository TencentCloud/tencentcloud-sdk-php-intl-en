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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Product metadata
 *
 * @method integer getCreationDate() Obtain Product creation time
 * @method void setCreationDate(integer $CreationDate) Set Product creation time
 */
class ProductMetadata extends AbstractModel
{
    /**
     * @var integer Product creation time
     */
    public $CreationDate;

    /**
     * @param integer $CreationDate Product creation time
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
        if (array_key_exists("CreationDate",$param) and $param["CreationDate"] !== null) {
            $this->CreationDate = $param["CreationDate"];
        }
    }
}
