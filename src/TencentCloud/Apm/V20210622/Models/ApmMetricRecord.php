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
 * Metric list cell.
 *
 * @method array getFields() Obtain Field array, used for the query result of indicators.
 * @method void setFields(array $Fields) Set Field array, used for the query result of indicators.
 * @method array getTags() Obtain Tag array, used to distinguish the objects of groupby.
 * @method void setTags(array $Tags) Set Tag array, used to distinguish the objects of groupby.
 */
class ApmMetricRecord extends AbstractModel
{
    /**
     * @var array Field array, used for the query result of indicators.
     */
    public $Fields;

    /**
     * @var array Tag array, used to distinguish the objects of groupby.
     */
    public $Tags;

    /**
     * @param array $Fields Field array, used for the query result of indicators.
     * @param array $Tags Tag array, used to distinguish the objects of groupby.
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
        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = [];
            foreach ($param["Fields"] as $key => $value){
                $obj = new ApmField();
                $obj->deserialize($value);
                array_push($this->Fields, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
