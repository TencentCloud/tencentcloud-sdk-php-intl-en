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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Opening and closing credits parameters
 *
 * @method array getHeadSet() Obtain Opening credits list
 * @method void setHeadSet(array $HeadSet) Set Opening credits list
 * @method array getTailSet() Obtain Closing credits list
 * @method void setTailSet(array $TailSet) Set Closing credits list
 */
class HeadTailParameter extends AbstractModel
{
    /**
     * @var array Opening credits list
     */
    public $HeadSet;

    /**
     * @var array Closing credits list
     */
    public $TailSet;

    /**
     * @param array $HeadSet Opening credits list
     * @param array $TailSet Closing credits list
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
        if (array_key_exists("HeadSet",$param) and $param["HeadSet"] !== null) {
            $this->HeadSet = [];
            foreach ($param["HeadSet"] as $key => $value){
                $obj = new MediaInputInfo();
                $obj->deserialize($value);
                array_push($this->HeadSet, $obj);
            }
        }

        if (array_key_exists("TailSet",$param) and $param["TailSet"] !== null) {
            $this->TailSet = [];
            foreach ($param["TailSet"] as $key => $value){
                $obj = new MediaInputInfo();
                $obj->deserialize($value);
                array_push($this->TailSet, $obj);
            }
        }
    }
}
