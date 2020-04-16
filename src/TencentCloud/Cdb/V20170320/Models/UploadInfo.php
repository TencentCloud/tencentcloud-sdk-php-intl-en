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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * File upload description
 *
 * @method integer getAllSliceNum() Obtain Number of parts of file
 * @method void setAllSliceNum(integer $AllSliceNum) Set Number of parts of file
 * @method integer getCompleteNum() Obtain Number of completed parts
 * @method void setCompleteNum(integer $CompleteNum) Set Number of completed parts
 */
class UploadInfo extends AbstractModel
{
    /**
     * @var integer Number of parts of file
     */
    public $AllSliceNum;

    /**
     * @var integer Number of completed parts
     */
    public $CompleteNum;

    /**
     * @param integer $AllSliceNum Number of parts of file
     * @param integer $CompleteNum Number of completed parts
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
        if (array_key_exists("AllSliceNum",$param) and $param["AllSliceNum"] !== null) {
            $this->AllSliceNum = $param["AllSliceNum"];
        }

        if (array_key_exists("CompleteNum",$param) and $param["CompleteNum"] !== null) {
            $this->CompleteNum = $param["CompleteNum"];
        }
    }
}
