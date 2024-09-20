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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Action field configuration result
 *
 * @method integer getActionId() Obtain Action ID
 * @method void setActionId(integer $ActionId) Set Action ID
 * @method string getActionName() Obtain Action name
 * @method void setActionName(string $ActionName) Set Action name
 * @method array getConfigDetail() Obtain Filed configuration details corresponding to the action
 * @method void setConfigDetail(array $ConfigDetail) Set Filed configuration details corresponding to the action
 */
class ActionFieldConfigResult extends AbstractModel
{
    /**
     * @var integer Action ID
     */
    public $ActionId;

    /**
     * @var string Action name
     */
    public $ActionName;

    /**
     * @var array Filed configuration details corresponding to the action
     */
    public $ConfigDetail;

    /**
     * @param integer $ActionId Action ID
     * @param string $ActionName Action name
     * @param array $ConfigDetail Filed configuration details corresponding to the action
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
        if (array_key_exists("ActionId",$param) and $param["ActionId"] !== null) {
            $this->ActionId = $param["ActionId"];
        }

        if (array_key_exists("ActionName",$param) and $param["ActionName"] !== null) {
            $this->ActionName = $param["ActionName"];
        }

        if (array_key_exists("ConfigDetail",$param) and $param["ConfigDetail"] !== null) {
            $this->ConfigDetail = [];
            foreach ($param["ConfigDetail"] as $key => $value){
                $obj = new ActionFieldConfigDetail();
                $obj->deserialize($value);
                array_push($this->ConfigDetail, $obj);
            }
        }
    }
}
