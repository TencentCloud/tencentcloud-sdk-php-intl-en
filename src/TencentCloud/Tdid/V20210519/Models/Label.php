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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The label information.
 *
 * @method integer getLabelId() Obtain The label ID.
 * @method void setLabelId(integer $LabelId) Set The label ID.
 * @method string getLabelName() Obtain The label name.
 * @method void setLabelName(string $LabelName) Set The label name.
 * @method integer getDidCount() Obtain The number of DIDs.
 * @method void setDidCount(integer $DidCount) Set The number of DIDs.
 * @method string getDid() Obtain The DID of the creator.
 * @method void setDid(string $Did) Set The DID of the creator.
 * @method string getClusterId() Obtain The network ID.
 * @method void setClusterId(string $ClusterId) Set The network ID.
 * @method string getCreateTime() Obtain The creation time.
 * @method void setCreateTime(string $CreateTime) Set The creation time.
 * @method integer getGroupId() Obtain The group ID.
 * @method void setGroupId(integer $GroupId) Set The group ID.
 */
class Label extends AbstractModel
{
    /**
     * @var integer The label ID.
     */
    public $LabelId;

    /**
     * @var string The label name.
     */
    public $LabelName;

    /**
     * @var integer The number of DIDs.
     */
    public $DidCount;

    /**
     * @var string The DID of the creator.
     */
    public $Did;

    /**
     * @var string The network ID.
     */
    public $ClusterId;

    /**
     * @var string The creation time.
     */
    public $CreateTime;

    /**
     * @var integer The group ID.
     */
    public $GroupId;

    /**
     * @param integer $LabelId The label ID.
     * @param string $LabelName The label name.
     * @param integer $DidCount The number of DIDs.
     * @param string $Did The DID of the creator.
     * @param string $ClusterId The network ID.
     * @param string $CreateTime The creation time.
     * @param integer $GroupId The group ID.
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
        if (array_key_exists("LabelId",$param) and $param["LabelId"] !== null) {
            $this->LabelId = $param["LabelId"];
        }

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("DidCount",$param) and $param["DidCount"] !== null) {
            $this->DidCount = $param["DidCount"];
        }

        if (array_key_exists("Did",$param) and $param["Did"] !== null) {
            $this->Did = $param["Did"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
