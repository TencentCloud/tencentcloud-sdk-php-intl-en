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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Dedicated Redis cluster resource package.
 *
 * @method string getResourceBundleName() Obtain Resource package name.
 * @method void setResourceBundleName(string $ResourceBundleName) Set Resource package name.
 * @method integer getAvailableMemory() Obtain Saleable memory. Unit: GB.
 * @method void setAvailableMemory(integer $AvailableMemory) Set Saleable memory. Unit: GB.
 * @method integer getCount() Obtain Number of resource packages.
 * @method void setCount(integer $Count) Set Number of resource packages.
 */
class ResourceBundle extends AbstractModel
{
    /**
     * @var string Resource package name.
     */
    public $ResourceBundleName;

    /**
     * @var integer Saleable memory. Unit: GB.
     */
    public $AvailableMemory;

    /**
     * @var integer Number of resource packages.
     */
    public $Count;

    /**
     * @param string $ResourceBundleName Resource package name.
     * @param integer $AvailableMemory Saleable memory. Unit: GB.
     * @param integer $Count Number of resource packages.
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
        if (array_key_exists("ResourceBundleName",$param) and $param["ResourceBundleName"] !== null) {
            $this->ResourceBundleName = $param["ResourceBundleName"];
        }

        if (array_key_exists("AvailableMemory",$param) and $param["AvailableMemory"] !== null) {
            $this->AvailableMemory = $param["AvailableMemory"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
