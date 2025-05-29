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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Label details.
 *
 * @method integer getSource() Obtain Label source.
 * @method void setSource(integer $Source) Set Label source.
 * @method string getAttrBizId() Obtain Label ID.
 * @method void setAttrBizId(string $AttrBizId) Set Label ID.
 * @method string getAttrKey() Obtain Label identification.
 * @method void setAttrKey(string $AttrKey) Set Label identification.
 * @method string getAttrName() Obtain Label name.
 * @method void setAttrName(string $AttrName) Set Label name.
 * @method array getLabels() Obtain Label value.
 * @method void setLabels(array $Labels) Set Label value.
 */
class AttrLabel extends AbstractModel
{
    /**
     * @var integer Label source.
     */
    public $Source;

    /**
     * @var string Label ID.
     */
    public $AttrBizId;

    /**
     * @var string Label identification.
     */
    public $AttrKey;

    /**
     * @var string Label name.
     */
    public $AttrName;

    /**
     * @var array Label value.
     */
    public $Labels;

    /**
     * @param integer $Source Label source.
     * @param string $AttrBizId Label ID.
     * @param string $AttrKey Label identification.
     * @param string $AttrName Label name.
     * @param array $Labels Label value.
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("AttrBizId",$param) and $param["AttrBizId"] !== null) {
            $this->AttrBizId = $param["AttrBizId"];
        }

        if (array_key_exists("AttrKey",$param) and $param["AttrKey"] !== null) {
            $this->AttrKey = $param["AttrKey"];
        }

        if (array_key_exists("AttrName",$param) and $param["AttrName"] !== null) {
            $this->AttrName = $param["AttrName"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }
    }
}
