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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Service information.
 *
 * @method string getServiceName() Obtain Application service name.
 * @method void setServiceName(string $ServiceName) Set Application service name.
 * @method array getTags() Obtain Tags Tag array.
 * @method void setTags(array $Tags) Set Tags Tag array.
 */
class SpanProcess extends AbstractModel
{
    /**
     * @var string Application service name.
     */
    public $ServiceName;

    /**
     * @var array Tags Tag array.
     */
    public $Tags;

    /**
     * @param string $ServiceName Application service name.
     * @param array $Tags Tags Tag array.
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new SpanTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
