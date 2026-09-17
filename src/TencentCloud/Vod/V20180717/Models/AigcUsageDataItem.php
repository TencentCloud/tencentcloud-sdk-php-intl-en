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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getSpecification() Obtain 
 * @method void setSpecification(string $Specification) Set 
 * @method array getDataSet() Obtain 
 * @method void setDataSet(array $DataSet) Set 
 */
class AigcUsageDataItem extends AbstractModel
{
    /**
     * @var string 
     */
    public $Specification;

    /**
     * @var array 
     */
    public $DataSet;

    /**
     * @param string $Specification 
     * @param array $DataSet 
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
        if (array_key_exists("Specification",$param) and $param["Specification"] !== null) {
            $this->Specification = $param["Specification"];
        }

        if (array_key_exists("DataSet",$param) and $param["DataSet"] !== null) {
            $this->DataSet = [];
            foreach ($param["DataSet"] as $key => $value){
                $obj = new TaskStatDataItem();
                $obj->deserialize($value);
                array_push($this->DataSet, $obj);
            }
        }
    }
}
