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
 * ModifyAttributeLabel request structure.
 *
 * @method string getBotBizId() Obtain Application ID.
 * @method void setBotBizId(string $BotBizId) Set Application ID.
 * @method string getAttributeBizId() Obtain Label ID.
 * @method void setAttributeBizId(string $AttributeBizId) Set Label ID.
 * @method string getAttrName() Obtain Label name.
 * @method void setAttrName(string $AttrName) Set Label name.
 * @method string getAttrKey() Obtain Label identifier (abolished).
 * @method void setAttrKey(string $AttrKey) Set Label identifier (abolished).
 * @method string getLoginUin() Obtain Login to user's root account (required in integrator mode).
 * @method void setLoginUin(string $LoginUin) Set Login to user's root account (required in integrator mode).
 * @method string getLoginSubAccountUin() Obtain Login to user's sub-account (required in integrator mode).
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) Set Login to user's sub-account (required in integrator mode).
 * @method array getDeleteLabelBizIds() Obtain Deleted label value.
 * @method void setDeleteLabelBizIds(array $DeleteLabelBizIds) Set Deleted label value.
 * @method array getLabels() Obtain Newly-added or edited label.
 * @method void setLabels(array $Labels) Set Newly-added or edited label.
 */
class ModifyAttributeLabelRequest extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $BotBizId;

    /**
     * @var string Label ID.
     */
    public $AttributeBizId;

    /**
     * @var string Label name.
     */
    public $AttrName;

    /**
     * @var string Label identifier (abolished).
     */
    public $AttrKey;

    /**
     * @var string Login to user's root account (required in integrator mode).
     */
    public $LoginUin;

    /**
     * @var string Login to user's sub-account (required in integrator mode).
     */
    public $LoginSubAccountUin;

    /**
     * @var array Deleted label value.
     */
    public $DeleteLabelBizIds;

    /**
     * @var array Newly-added or edited label.
     */
    public $Labels;

    /**
     * @param string $BotBizId Application ID.
     * @param string $AttributeBizId Label ID.
     * @param string $AttrName Label name.
     * @param string $AttrKey Label identifier (abolished).
     * @param string $LoginUin Login to user's root account (required in integrator mode).
     * @param string $LoginSubAccountUin Login to user's sub-account (required in integrator mode).
     * @param array $DeleteLabelBizIds Deleted label value.
     * @param array $Labels Newly-added or edited label.
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("AttributeBizId",$param) and $param["AttributeBizId"] !== null) {
            $this->AttributeBizId = $param["AttributeBizId"];
        }

        if (array_key_exists("AttrName",$param) and $param["AttrName"] !== null) {
            $this->AttrName = $param["AttrName"];
        }

        if (array_key_exists("AttrKey",$param) and $param["AttrKey"] !== null) {
            $this->AttrKey = $param["AttrKey"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }

        if (array_key_exists("DeleteLabelBizIds",$param) and $param["DeleteLabelBizIds"] !== null) {
            $this->DeleteLabelBizIds = $param["DeleteLabelBizIds"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new AttributeLabel();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }
    }
}
