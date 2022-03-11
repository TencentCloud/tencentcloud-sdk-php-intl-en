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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PeakFamilyInfo: peak information of data such as CPU by model type
 *
 * @method InstanceFamilyTypeConfig getInstanceFamily() Obtain Model type information.
 * @method void setInstanceFamily(InstanceFamilyTypeConfig $InstanceFamily) Set Model type information.
 * @method array getPeakBaseSet() Obtain Peak information of basic data.
 * @method void setPeakBaseSet(array $PeakBaseSet) Set Peak information of basic data.
 */
class PeakFamilyInfo extends AbstractModel
{
    /**
     * @var InstanceFamilyTypeConfig Model type information.
     */
    public $InstanceFamily;

    /**
     * @var array Peak information of basic data.
     */
    public $PeakBaseSet;

    /**
     * @param InstanceFamilyTypeConfig $InstanceFamily Model type information.
     * @param array $PeakBaseSet Peak information of basic data.
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
        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = new InstanceFamilyTypeConfig();
            $this->InstanceFamily->deserialize($param["InstanceFamily"]);
        }

        if (array_key_exists("PeakBaseSet",$param) and $param["PeakBaseSet"] !== null) {
            $this->PeakBaseSet = [];
            foreach ($param["PeakBaseSet"] as $key => $value){
                $obj = new PeakBase();
                $obj->deserialize($value);
                array_push($this->PeakBaseSet, $obj);
            }
        }
    }
}
