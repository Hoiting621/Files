<%@ Page Title="" Language="C#" MasterPageFile="~/Web/MasterPage/masterPage.master" AutoEventWireup="true" CodeBehind="restaurantInfo.aspx.cs" Inherits="WebApplication1.Web.Pages.restaurantInfo" %>
<asp:Content ID="restaurantHead" ContentPlaceHolderID="head" runat="server">

</asp:Content>
<asp:Content ID="restaurantContent" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <div id = 'nameRestaurant' runat ="server">
        <asp:TextBox id="restaurant" Text ="Risotto Dabit"  runat ="server"/>
        <p id='averageRate'  runat ="server">
            Rate :
            <asp:TextBox id="rateBox" Text="Rate"  runat ="server"/>
        </p>
        
    </div>

    <div>
        <asp:Image id="photoRestaurant" ImageUrl="..\Images\italiano.jpg" runat="server"/>
    </div>
        
    <div id="description"  runat ="server">
        <asp:TextBox id="dexriptionText" Text ="In this restaurant....."  runat ="server"/>
    </div>

    <div>
        <asp:Button id = 'order' Text = 'Order food' OnClick="order_Click" runat ="server" />
        <asp:Button id = 'book' Text = 'Booking' OnClick="book_Click" runat ="server" />
    </div>
        User ratings:
    <div id = 'comments'>
        <div class ="userComment">
            <p>
                <asp:TextBox class="username" Text="Username"  runat ="server"/>
            </p>
            <p>
                Rate: 
                <asp:TextBox class="rateUser" Text="Rate"  runat ="server"/>
            </p>
               
                <asp:TextBox class="titleComment" Text="Title"  runat ="server"/>
            <p>
                <asp:TextBox class="comment" Text="Comment"  runat ="server"/>
            </p>
        </div>
            
        <div class ="userComment">
            <p>
                <asp:TextBox class="username" Text="Username"  runat ="server"/>
            </p>
            <p>
                Rate: 
                <asp:TextBox class="rateUser" Text="Rate"  runat ="server"/>
            </p>
               
                <asp:TextBox class="titleComment" Text="Title"  runat ="server"/>
            <p>
                <asp:TextBox class="comment" Text="Comment"  runat ="server"/>
            </p>
        </div>
    </div>
    <div>
        <asp:TextBox id="titleComment" PlaceHolder="Write the title comment"  runat ="server"/>
        <asp:TextBox id="rate" PlaceHolder="Write rate"  runat ="server"/>
        <p>
             <asp:TextBox id="addComment" PlaceHolder="Write your comment"  runat ="server"/>
        </p>
       <p>
           <asp:Button id="commentButton" Text="Comment" OnClick="comment_Click" runat ="server"/>
       </p>
    </div>
</asp:Content>
