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
 * @method string getAttrBizId() Obtain Label ID.
 * @method void setAttrBizId(string $AttrBizId) Set Label ID.
 * @method string getAttrKey() Obtain Label identification.
 * @method void setAttrKey(string $AttrKey) Set Label identification.
 * @method string getAttrName() Obtain Label name.
 * @method void setAttrName(string $AttrName) Set Label name.
 * @method array getLabelNames() Obtain Label value name.
 * @method void setLabelNames(array $LabelNames) Set Label value name.
 * @method boolean getIsUpdating() Obtain Whether the label is being updated.
 * @method void setIsUpdating(boolean $IsUpdating) Set Whether the label is being updated.
 * @method integer getStatus() Obtain Status.
 * @method void setStatus(integer $Status) Set Status.
 * @method string getStatusDesc() Obtain Status description.
 * @method void setStatusDesc(string $StatusDesc) Set Status description.
 * @method string getLabelTotalCount() Obtain Total number of label values.
 * @method void setLabelTotalCount(string $LabelTotalCount) Set Total number of label values.
 */
class AttrLabelDetail extends AbstractModel
{
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
     * @var array Label value name.
     */
    public $LabelNames;

    /**
     * @var boolean Whether the label is being updated.
     */
    public $IsUpdating;

    /**
     * @var integer Status.
     */
    public $Status;

    /**
     * @var string Status description.
     */
    public $StatusDesc;

    /**
     * @var string Total number of label values.
     */
    public $LabelTotalCount;

    /**
     * @param string $AttrBizId Label ID.
     * @param string $AttrKey Label identification.
     * @param string $AttrName Label name.
     * @param array $LabelNames Label value name.
     * @param boolean $IsUpdating Whether the label is being updated.
     * @param integer $Status Status.
     * @param string $StatusDesc Status description.
     * @param string $LabelTotalCount Total number of label values.
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
        if (array_key_exists("AttrBizId",$param) and $param["AttrBizId"] !== null) {
            $this->AttrBizId = $param["AttrBizId"];
        }

        if (array_key_exists("AttrKey",$param) and $param["AttrKey"] !== null) {
            $this->AttrKey = $param["AttrKey"];
        }

        if (array_key_exists("AttrName",$param) and $param["AttrName"] !== null) {
            $this->AttrName = $param["AttrName"];
        }

        if (array_key_exists("LabelNames",$param) and $param["LabelNames"] !== null) {
            $this->LabelNames = $param["LabelNames"];
        }

        if (array_key_exists("IsUpdating",$param) and $param["IsUpdating"] !== null) {
            $this->IsUpdating = $param["IsUpdating"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("LabelTotalCount",$param) and $param["LabelTotalCount"] !== null) {
            $this->LabelTotalCount = $param["LabelTotalCount"];
        }
    }
}
