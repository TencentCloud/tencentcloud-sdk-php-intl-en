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
 * Label reference information.
 *
 * @method integer getSource() Obtain Label source, 1: label.
 * @method void setSource(integer $Source) Set Label source, 1: label.
 * @method string getAttributeBizId() Obtain Label ID.
 * @method void setAttributeBizId(string $AttributeBizId) Set Label ID.
 * @method array getLabelBizIds() Obtain Label value ID.
 * @method void setLabelBizIds(array $LabelBizIds) Set Label value ID.
 */
class AttrLabelRefer extends AbstractModel
{
    /**
     * @var integer Label source, 1: label.
     */
    public $Source;

    /**
     * @var string Label ID.
     */
    public $AttributeBizId;

    /**
     * @var array Label value ID.
     */
    public $LabelBizIds;

    /**
     * @param integer $Source Label source, 1: label.
     * @param string $AttributeBizId Label ID.
     * @param array $LabelBizIds Label value ID.
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

        if (array_key_exists("AttributeBizId",$param) and $param["AttributeBizId"] !== null) {
            $this->AttributeBizId = $param["AttributeBizId"];
        }

        if (array_key_exists("LabelBizIds",$param) and $param["LabelBizIds"] !== null) {
            $this->LabelBizIds = $param["LabelBizIds"];
        }
    }
}
