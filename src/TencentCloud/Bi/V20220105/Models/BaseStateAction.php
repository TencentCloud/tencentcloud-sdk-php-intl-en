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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Operation attributes of every record returned by a list query
 *
 * @method boolean getShowEdit() Obtain Whether the edit button is visible.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShowEdit(boolean $ShowEdit) Set Whether the edit button is visible.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsEdit() Obtain Whether the edit button is clickable.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsEdit(boolean $IsEdit) Set Whether the edit button is clickable.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEditText() Obtain Edit button text.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEditText(string $EditText) Set Edit button text.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEditTips() Obtain Edit-disabled hint.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEditTips(string $EditTips) Set Edit-disabled hint.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getShowDel() Obtain Whether the deletion button is visible.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShowDel(boolean $ShowDel) Set Whether the deletion button is visible.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsDel() Obtain Whether the deletion button is clickable.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsDel(boolean $IsDel) Set Whether the deletion button is clickable.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDelText() Obtain Delete button text.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDelText(string $DelText) Set Delete button text.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDelTips() Obtain Delete-disabled hint.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDelTips(string $DelTips) Set Delete-disabled hint.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getShowCopy() Obtain Whether the copy button is visible.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShowCopy(boolean $ShowCopy) Set Whether the copy button is visible.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getShowView() Obtain Whether it is visible.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShowView(boolean $ShowView) Set Whether it is visible.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getShowRename() Obtain Whether renaming is allowed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShowRename(boolean $ShowRename) Set Whether renaming is allowed.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BaseStateAction extends AbstractModel
{
    /**
     * @var boolean Whether the edit button is visible.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShowEdit;

    /**
     * @var boolean Whether the edit button is clickable.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsEdit;

    /**
     * @var string Edit button text.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EditText;

    /**
     * @var string Edit-disabled hint.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EditTips;

    /**
     * @var boolean Whether the deletion button is visible.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShowDel;

    /**
     * @var boolean Whether the deletion button is clickable.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsDel;

    /**
     * @var string Delete button text.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DelText;

    /**
     * @var string Delete-disabled hint.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DelTips;

    /**
     * @var boolean Whether the copy button is visible.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShowCopy;

    /**
     * @var boolean Whether it is visible.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShowView;

    /**
     * @var boolean Whether renaming is allowed.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ShowRename;

    /**
     * @param boolean $ShowEdit Whether the edit button is visible.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsEdit Whether the edit button is clickable.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EditText Edit button text.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EditTips Edit-disabled hint.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $ShowDel Whether the deletion button is visible.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsDel Whether the deletion button is clickable.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DelText Delete button text.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DelTips Delete-disabled hint.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $ShowCopy Whether the copy button is visible.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $ShowView Whether it is visible.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $ShowRename Whether renaming is allowed.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ShowEdit",$param) and $param["ShowEdit"] !== null) {
            $this->ShowEdit = $param["ShowEdit"];
        }

        if (array_key_exists("IsEdit",$param) and $param["IsEdit"] !== null) {
            $this->IsEdit = $param["IsEdit"];
        }

        if (array_key_exists("EditText",$param) and $param["EditText"] !== null) {
            $this->EditText = $param["EditText"];
        }

        if (array_key_exists("EditTips",$param) and $param["EditTips"] !== null) {
            $this->EditTips = $param["EditTips"];
        }

        if (array_key_exists("ShowDel",$param) and $param["ShowDel"] !== null) {
            $this->ShowDel = $param["ShowDel"];
        }

        if (array_key_exists("IsDel",$param) and $param["IsDel"] !== null) {
            $this->IsDel = $param["IsDel"];
        }

        if (array_key_exists("DelText",$param) and $param["DelText"] !== null) {
            $this->DelText = $param["DelText"];
        }

        if (array_key_exists("DelTips",$param) and $param["DelTips"] !== null) {
            $this->DelTips = $param["DelTips"];
        }

        if (array_key_exists("ShowCopy",$param) and $param["ShowCopy"] !== null) {
            $this->ShowCopy = $param["ShowCopy"];
        }

        if (array_key_exists("ShowView",$param) and $param["ShowView"] !== null) {
            $this->ShowView = $param["ShowView"];
        }

        if (array_key_exists("ShowRename",$param) and $param["ShowRename"] !== null) {
            $this->ShowRename = $param["ShowRename"];
        }
    }
}
